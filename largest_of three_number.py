num1=float(input("enter a number 1: "))
num2=float(input("enter a number 2:"))
num3=float(input("entre a number 3:"))

if num1>=num2 and num1>=num3:
    print("number num1 is bigger",num1 )
elif num2>=num1 and num2>=num3:
    print("number num2 is bigger", num2)
else:
    print("number num3 is bigger", num3)
