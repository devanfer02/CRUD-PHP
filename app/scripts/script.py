import csv
import re

#this script is to create dummy data from a class 
#in this example, i use pti-c pbo class as a dummy data            
class Data : 
    def __init__(self, csvfile, universitas, prodi) :
        try :
            with open(csvfile,'r') as file :
                reader = csv.reader(file)
                self.data = []
                self.universitas = universitas
                self.prodi = prodi
                for row in reader : 
                    self.data.append(row)
                print(len(self.data))
                
        except Exception as error:
            print(f"Error: {error}")

    def cleanName(self, name) :
        name = name.title()
        formatted = re.sub(r'[^a-zA-Z\s]', ' ', name)

        return formatted

    def createDummyEmail(self, name) :
        formatted = (name.lower())
        formatted = re.sub(r'[^a-zA-Z\s]', '', formatted) 
        formatted = re.sub(r'\s', '', formatted)
        formatted = formatted[0:6]
        formatted = formatted + '@gmail.com'
        
        return formatted

    def addPetik(self, data) : 
        return "'" + data + "'" 
    
    def printData(self) :
        try :
            with open('formatted.txt','w') as file :  
                print('Loading',end='')      
                for row in self.data :
                    updated_row = [row[0], self.cleanName(row[2]), row[1], self.prodi[0], self.createDummyEmail(row[2]), self.universitas[0]]
                    data = '(' 
                    for j, column in enumerate(updated_row) :
                        if(j == len(updated_row) - 1) : 
                            data = data + self.addPetik(column) + '), '
                        elif(j == 0) : 
                            data = data + column + ', '
                        else : 
                            data = data + self.addPetik(column) + ', '
                    file.write(data + '\n')
                    print('.',end='')
                print('\nStatus : ',end='')
                print('Write Success!')
        except Exception as error :
            print(f'Error: {error}')


def main() :
    data = Data('data.csv', ['Universitas Brawijaya'], ['Pendidikan Teknologi Informasi'])
    data.printData()

if __name__ == "__main__" :
    main()
