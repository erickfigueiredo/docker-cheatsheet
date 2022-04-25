import yaml

if __name__ == '__main__':
    with open('test.yml', 'r') as file:
        dictionary = yaml.safe_load(file)
    
    for key, value in dictionary.items():
        print(f'{key}: {value}')