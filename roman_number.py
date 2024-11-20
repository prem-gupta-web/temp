def int_to_roman(num):
   
    val = [
        1000, 900, 500, 400,
        100, 90, 50, 40,
        10, 9, 5, 4, 1
    ]
    symbols = [
        "M", "CM", "D", "CD",
        "C", "XC", "L", "XL",
        "X", "IX", "V", "IV", "I"
    ]
    
    roman_numeral = ""
    for i in range(len(val)):
        while num >= val[i]:
            roman_numeral += symbols[i]
            num -= val[i]
    return roman_numeral

number = int(input("Enter an integer (1 to 3999): "))

if 1 <= number <= 3999:
    print(f"The Roman numeral for {number} is: {int_to_roman(number)}")
else:
    print("Please enter a number between 1 and 3999.")
