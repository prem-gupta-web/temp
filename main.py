# main.py

# Import the Fibonacci module
import Fibonacci

# Input from the user
num_terms = int(input("Enter the number of Fibonacci terms to generate: "))

# Call the function from the module
fib_sequence = Fibonacci.generate_fibonacci(num_terms)

# Display the result
print(f"The first {num_terms} Fibonacci numbers are: {fib_sequence}")
