import re
import argparse


def find_missing_php_variable(miss_variable_php_file, full_variable_php_file):
    """
    find missing php variable in first file from the second file
    """
    exist_vars = list()
    miss_vars_lines = list()

    with open(miss_variable_php_file, encoding='utf8') as php_file:  # get variables
        content = php_file.readlines()
        for line in content:
            variable = re.findall('\$string\[\'.+\'\]', line)
            if len(variable) > 0:
                exist_vars.append(variable[0])

    with open(full_variable_php_file, encoding='utf8') as php_file:  # get variables
        content = php_file.read().split(';')
        for line in content:
            variable = re.findall('\$string\[\'.+\'\]', line)
            if len(variable) > 0:
                if variable[0] not in exist_vars:
                    miss_vars_lines.append(line.strip()+";")

    return miss_vars_lines




if __name__ == "__main__":
    parser = argparse.ArgumentParser()
    parser.add_argument("arguments", nargs='+', metavar='args', type = str, help = "path to miss variable php file [necessary argument]")
    parser.add_argument("-m", "--miss_var_file", type = str, help = "path to miss variable php file [necessary argument]")
    parser.add_argument("-f", "--full_var_file", type = str, help = "path to miss variable php file [necessary argument]")
    parser.add_argument("-o", "--output_file", type = str, help = "path to output file")

    args = parser.parse_args()


    if len(args.arguments) >= 1:
        args.miss_var_file = args.arguments[0]

    if len(args.arguments) >= 2:
        args.full_var_file = args.arguments[1]

    if len(args.arguments) >= 3:
        args.output_file = args.arguments[2]
    
    if args.miss_var_file is None or args.full_var_file is None:
        print("\n\tERROR: Missing necessary argument(s)")
        print("----------------------------------------------------")
        parser.print_help()
        print()

    else:
        if args.output_file is None:
            l = args.miss_var_file.split('.')
            args.output_file = '.'.join(l[:-1]) + '_miss_var.' + l[-1]

        missing_variables = find_missing_php_variable(args.miss_var_file, args.full_var_file)
        with open(args.output_file, 'w', encoding='utf8') as out_file:
            out_file.write('\n'.join(missing_variables))
        
