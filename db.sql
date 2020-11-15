CREATE TABLE card (cardID INT NOT NULL AUTO_INCREMENT, setID INT,
       cardQuestion VARCHAR(20000), cardAnswer VARCHAR(20000), PRIMARY KEY (cardID), FOREIGN KEY (setID) REFERENCES set(setID));
	  
CREATE TABLE set (setID INT NOT NULL AUTO_INCREMENT , setName VARCHAR(50), PRIMARY KEY (setID));