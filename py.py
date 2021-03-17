file = open(input('enter file path : '))
fr = file.readlines()
file_list = []

file_list.append(fr)
file.close()

print(file_list)