# create a tuple
my_tuple=("prem", "sam", "rahul", "abhishek", "yash")

#access element in tuple
print("complete_tuple", my_tuple)
print("first_element", my_tuple[0])
print("last_tuple", my_tuple[-1])

#slicing tuple
print("slicing_tuple: ", my_tuple[0:3])

#length of a tuple
print("length of a tuple: ", len(my_tuple))

#check is sam i nmy tuple
print("is sam present in tuple?","sam"in my_tuple)

#concatinate of tuple
new_tuple=("banana", "apple", "papaya")
concatinate=my_tuple+new_tuple
print("concatinate_tuple", concatinate)
