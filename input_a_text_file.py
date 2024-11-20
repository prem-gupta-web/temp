def get_unique_words(file_name):
    """
    Reads a text file and returns unique words in alphabetical order.
    :param file_name: Name of the text file to read.
    :return: A sorted list of unique words.
    """
    try:
        with open(file_name, 'r') as file:
            # Read the file's content
            text = file.read()

        # Split the text into words and normalize to lowercase
        words = text.split()
        words = [word.strip('.,!?;"()[]').lower() for word in words]

        # Get unique words
        unique_words = sorted(set(words))
        return unique_words

    except FileNotFoundError:
        print("Error: File not found.")
        return []

# Input file name
file_name = input("Enter the name of the text file (with extension): ")

# Get unique words and print them
unique_words = get_unique_words(file_name)
if unique_words:
    print("\nUnique words in alphabetical order:")
    for word in unique_words:
        print(word)
