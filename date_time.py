from datetime import datetime
current_date=datetime.now()
formetted_date=current_date.strftime("%A, %B %Y")
print("current_date: ",formetted_date)