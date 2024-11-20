student={
    "name":"prem bhunjwa",
    "class":"BCA",
    "semester":"5th",
    "address":"ghamapur",
    }
#access and print value from dictionary
print("student name :", student["name"])
print("class: ", student["class"])

#adding new key value pair
student["hobby"]="watching_movie"
print("adding new key value pair",student)

#update existing key-value pair
student["address"]="ghamapur_jabalpur"
print("update addresess", student)

#removing a key value pair by using pop method
removing=student.pop("hobby")
print("after remove hobby your dictionary is : ", student)
