<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:dit="http://iec.incometax.gov.in/ditsecws" xmlns:req="http://iec.incometax.gov.in/ditsecws/request">
   <soapenv:Header/>
   <soapenv:Body>
      <dit:getBankAtmGenEvcDetails>
         <dit:DitRequest uniqueRequestId="B000200206-2224560007">
            <req:pan>AEAPJ8518G</req:pan>
            <req:atmId>?</req:atmId>
            <req:atmCardNo>12386899</req:atmCardNo>
            <req:bankAccNum>?</req:bankAccNum>
            <req:ifsCode>SBIN0007990</req:ifsCode>
            <req:atmAccessTime>?</req:atmAccessTime>
            <req:accountName>?</req:accountName>
            <req:accountType>?</req:accountType>
            <req:accountStatus>?</req:accountStatus>
            <req:emailId>?</req:emailId>
            <req:mobileNumber>?</req:mobileNumber>
         </dit:DitRequest>
      </dit:getBankAtmGenEvcDetails>
   </soapenv:Body>
</soapenv:Envelope>
# PgLIFE

This is website build for people who are searching for PG's nearby especially for Students. I did this during the training done at **Internshala Training** Course.
Tools used are VSC, XAMPP. 
Front-End technologies are done by using HTML,CSS,,BOOSTRAP,JS and Back-End by PHP,MYSQL.
It contains the basic Index page with Signup and Login options and consists of Cities like Bengaluru, Hyderabad etc for searching PG's. A user can login and can
keep track of PG's list of which PG's he/she are interested in. A PG rating is sorted using the maintainence, facilities available etc. Interested user can just
go through the address mentioned in the View option of particular PG. User can search the PG's list according to Lowest or Highest Rent first or can do through
Gender(Male, Female, Unisex). Once a user created account he/she can check once the entered details in the Dashboard Section.
The details entered through the sign up form will be directly updated to the database MYSQL through PHP code. Only Admin has all access to the (those who have created accounts)members names, wishlist of PG's, passowrds etc.

