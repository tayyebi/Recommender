import csv
with open('quotes_all.csv', 'r') as csvfile:
    reader = csv.reader(csvfile, delimiter=';')
    name = None
    for row in reader:
        if row[1] and row[0] and row[2]: 
            print ("INSERT INTO `posts` (Content, `From`, Category) VALUES ('%s', '%s', '%s');" % (row[0], row[1], row[2]))