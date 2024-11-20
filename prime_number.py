# Function to check if a number is prime
def is_prime(num):
    if num < 2:
        return False
    for i in range(2, int(num**0.5) + 1):
        if num % i == 0:
            return False
    return True

# Print prime numbers less than 20
print("Prime numbers less than 20:")
for number in range(2, 20):
    if is_prime(number):
        print(number, end=" ")
