import csv
import re

#data.csv can be imported from your class detail
#this script is to create dummy data from a class
#in this example, i use pti-c pbo class as a dummy data
def cleanName(name) :
    name = name.title()
    formatted = re.sub(r'[^a-zA-Z\s]', ' ', name)

    return formatted

def createDummyEmail(name) :
    formatted = (name.lower())
    formatted = re.sub(r'[^a-zA-Z\s]', '', formatted) 
    formatted = re.sub(r'\s', '', formatted)
    formatted = formatted[0:6]
    formatted = formatted + '@gmail.com'
    
    return formatted

def addPetik(data) : 
    return "'" + data + "'" 

def importData():
    universitas = 'Universitas Brawijaya'
    prodi = ['Pendidikan Teknologi Informasi']
    with open('data.csv','r') as file :
        reader = csv.reader(file)

        for row in reader :
            updated_row = [row[0], cleanName(row[2]), row[1], prodi[0], createDummyEmail(row[2]), universitas]
            data = '(' 
            for j, column in enumerate(updated_row) :
                if(j == len(updated_row) - 1) : 
                    data = data + addPetik(column) + '), '
                elif(j == 0) : 
                    data = data + column + ', '
                else : 
                    data = data + addPetik(column) + ', '
            print(data)
                
importData()
