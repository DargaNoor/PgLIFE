# PgLIFE

This is website build for people who are searching for PG's nearby especially for Students. I did this during the training done at **Internshala Training** Course.
Tools used are VSC, XAMPP. 
Front-End technologies are done by using HTML,CSS,,BOOSTRAP,JS and Back-End by PHP,MYSQL.
It contains the basic Index page with Signup and Login options and consists of Cities like Bengaluru, Hyderabad etc for searching PG's. A user can login and can
keep track of PG's list of which PG's he/she are interested in. A PG rating is sorted using the maintainence, facilities available etc. Interested user can just
go through the address mentioned in the View option of particular PG. User can search the PG's list according to Lowest or Highest Rent first or can do through
Gender(Male, Female, Unisex). Once a user created account he/she can check once the entered details in the Dashboard Section.
The details entered through the sign up form will be directly updated to the database MYSQL through PHP code. Only Admin has all access to the (those who have created accounts)members names, wishlist of PG's, passowrds etc.


<soapenv:Envelope xmlns:dit="http://iec.incometax.gov.in/ditsecws" xmlns:req="http://iec.incometax.gov.in/ditsecws/request" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header>
      <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
         <wsse:BinarySecurityToken EncodingType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary" ValueType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-x509-token-profile-1.0#X509v3" wsu:Id="8374AE8FD47309F5181713973770353152">MIICyzCCAbOgAwIBAgIEEElUbzANBgkqhkiG9w0BAQUFADAWMRQwEgYDVQQDEwtJbmZvc3lzIEx0ZDAeFw0yMjA5MjIwNDM4MzJaFw0yNDA1MTQwNDM4MzJaMBYxFDASBgNVBAMTC0luZm9zeXMgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhfamuA3VA3M+7TrbcAkQgpe2jZZJNjy6QFGy3HfUB9RZUtwb8awvMa5HTrQ/3/U/XRZs8Kg+i9wuhW7aoHnhv7qF2coyz2ZHOqezrcHzWA8ZLuGNB5W71TdqRw6SklPixHtyM5lH7tJhtaI3HTOUQqYbyNI1+Z/NcEXA938iJcRRhzhb8ypLxe3iZcO0280p0sR73RpLq/LhTKDm05zaTzh0oFHqQ3kb9KJZVgWCeKxrTcnb+1RUKtivPmsLXdm4sOsYhJAzbj7NbltC7GdZaE0WfqNfvNH0VMJXHYganyYVnMHB9cgwDdP2B/n6piXNCY8FrLi1A97EXUxBHEP6KQIDAQABoyEwHzAdBgNVHQ4EFgQU1Q0s/iuIoZVh6sOIGEWDTQDn55swDQYJKoZIhvcNAQEFBQADggEBAER+9dTj6piRWFj3L1cHavW8vFFTvhuOwjr0SGHgBmzw+qyIYFOnCXyhJehtvWWk1Nsza1eNPrlMZaB34oXcTk6TuEnYKuEIxpszFnldQa0ou+X05JatzQPVKgfWktAA2VDSXu+oPDCQhs0t0QgV4VnDe/qtjHpvZHs+5qVy8mfaem8sEAASa47RMdJhf3tudCB9qs5b3F9eIuIc3b1WZ8jIEN4MT2zQFZKizL1MzLlDq2JRCH0Y4Y8m7qzJNXjQIxk5N3qMQmp1RvFUKXzXElDJ6XwSOkH9jqxW4Cdxmx6vk2ok2zzRiJ9HhmPyrbOvqiqSLfGMyelR9kPEKYRITok=</wsse:BinarySecurityToken>
         <xenc:EncryptedKey Id="EK-8374AE8FD47309F5181713973770353151" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#">
            <xenc:EncryptionMethod Algorithm="http://www.w3.org/2001/04/xmlenc#rsa-oaep-mgf1p"/>
            <ds:KeyInfo xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
               <wsse:SecurityTokenReference>
                  <wsse:Reference URI="#8374AE8FD47309F5181713973770353152" ValueType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-x509-token-profile-1.0#X509v3"/>
               </wsse:SecurityTokenReference>
            </ds:KeyInfo>
            <xenc:CipherData>
               <xenc:CipherValue>g3N9KJ/sPqWNcq7wmrrUW115iYcPCr6iu/opDSiV7Aky2JC/rV5vNGliRyW26PN+7EyLSrYJETwybP20yTZ7JsDf4uHqT47ieBgjewXXyapwiB300hTSKrgcX8VmuA/xnzvFPhpXqFd+Fa43cq9P7U44AjRcvtGxFkOBhfQlICjrkPVo8nijZ1yPLn91qvk6T5uSzAuvJZVkZc2JwDZ7q3N1+O916eL9mZYhx4mRApocAwF8o5xoHMlBotv+qJrUvfIk5Tr69QccKUVxGXt4p6kmXyD9YgbAf97lsQ1tondggIWbU1GOmaXdiCDfjq692W5vaSF9oJFHmFlMcvBqQw==</xenc:CipherValue>
            </xenc:CipherData>
            <xenc:ReferenceList>
               <xenc:DataReference URI="#ED-8374AE8FD47309F5181713973770354153"/>
               <xenc:DataReference URI="#ED-8374AE8FD47309F5181713973770355154"/>
            </xenc:ReferenceList>
         </xenc:EncryptedKey>
         <ds:Signature Id="SIG-8374AE8FD47309F5181713973770343150" xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
            <ds:SignedInfo>
               <ds:CanonicalizationMethod Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                  <ec:InclusiveNamespaces PrefixList="dit req soapenv" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
               </ds:CanonicalizationMethod>
               <ds:SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/>
               <ds:Reference URI="#TS-8374AE8FD47309F5181713973770337144">
                  <ds:Transforms>
                     <ds:Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                        <ec:InclusiveNamespaces PrefixList="wsse dit req soapenv" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
                     </ds:Transform>
                  </ds:Transforms>
                  <ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
                  <ds:DigestValue>6eX2/8FosEpbmBl2pwWrKXTfDYg=</ds:DigestValue>
               </ds:Reference>
               <ds:Reference URI="#UsernameToken-8374AE8FD47309F5181713973770337145">
                  <ds:Transforms>
                     <ds:Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                        <ec:InclusiveNamespaces PrefixList="dit req soapenv" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
                     </ds:Transform>
                  </ds:Transforms>
                  <ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
                  <ds:DigestValue>B1RGzemTjbJvYVcjL2Qf1Y7YO+Q=</ds:DigestValue>
               </ds:Reference>
               <ds:Reference URI="#id-8374AE8FD47309F5181713973770342149">
                  <ds:Transforms>
                     <ds:Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                        <ec:InclusiveNamespaces PrefixList="dit req" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
                     </ds:Transform>
                  </ds:Transforms>
                  <ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
                  <ds:DigestValue>LoYo1wzQMjyJ/ZTVH6UQfSPYqkM=</ds:DigestValue>
               </ds:Reference>
            </ds:SignedInfo>
            <ds:SignatureValue>FKaDLF99BfDmf5ipBsQ1Xm526AjNkTeEyxc1k5AQrXgVKrVbqOBVD0w4DxnqKcq1C+ZgmYkMZ/uDwle2qS9dTTmOk/ilUd4+nsEvhcid27+XQrGpSIpvf1o8k7szwn+6EPkvms8tTleK70Dz3xCvBYccWjkvx427BQQXOzqv4VkG40rTD6uRAqjdiiYKtFNPF9mQyf1mkOw2yTPGVCi40NDbigORZ4RpmIuk8BNp8aIb7krxdosFuS78p6vxsnit9n7TDLqOku3BzVTrMmQ6574XhWOGPhpSTnOaAPdUGMFdaXBQ7jNWLrQOBNGLAe5EOtX7w3X5Nsff4lSwI4GTBg==</ds:SignatureValue>
            <ds:KeyInfo Id="KI-8374AE8FD47309F5181713973770342147">
               <wsse:SecurityTokenReference wsu:Id="STR-8374AE8FD47309F5181713973770342148">
                  <wsse:KeyIdentifier EncodingType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary" ValueType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-x509-token-profile-1.0#X509v3">MIIFmTCCBIGgAwIBAgITGgAQyUIzz6iIY1+eWQAAABDJQjANBgkqhkiG9w0BAQsFADBAMRMwEQYKCZImiZPyLGQBGRYDU0JJMRIwEAYKCZImiZPyLGQBGRYCQUQxFTATBgNVBAMTDFNCSS1QUk9ELVJDQTAeFw0yMzExMDQxNDI0MjJaFw0yNTExMDMxNDI0MjJaMGYxCzAJBgNVBAYTAklOMRQwEgYDVQQIEwtNYWhhcmFzaHRyYTEPMA0GA1UEBxMGTXVtYmFpMQwwCgYDVQQKEwNTQkkxDDAKBgNVBAsTA0VJUzEUMBIGA1UEAwwLRU5DX0VJU19VQVQwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDdkkvd/PDvCheiFiU66V5gHoGDZY/ilXqdnwmm/ER8B6OJofI5ZaXeZy7g2lGpda79KNLik31Y3SeYpPMc2JQ6qQdwNDNa8HcLSUrPu9guXOJzBu1+xRPNmB4eVvbI67iwNtglxrpICjIHLF2c5bLI5Q2zd06RgI2AY6xVmLM3kvhKJJdSL7lbunxWvrr5GnjQErH7U0kU/TuDswkJo1Uqlg7+R/wOAamSB8WrAtAI+a1b6hDOUriGUIAN9UGPquYswt5/a//rp+GCdp3H7zg9Lv9oJ8elqtqpS4S5WDcVcKfWgW8K+R4iczUGnkGp5vjvgdwGqqGbNVr+Bp8iBPr1AgMBAAGjggJkMIICYDAOBgNVHQ8BAf8EBAMCBaAwHQYDVR0lBBYwFAYIKwYBBQUHAwEGCCsGAQUFBwMCMCcGCSsGAQQBgjcVCgQaMBgwCgYIKwYBBQUHAwEwCgYIKwYBBQUHAwIwHQYDVR0OBBYEFIgHGLf4jUSLVn2yTXmyOLDcNTLdMB8GA1UdIwQYMBaAFDeaIHQwXiT9H+W/rv8A9GsVdZ+wMIHLBgNVHR8EgcMwgcAwgb2ggbqggbeGgbRsZGFwOi8vL0NOPVNCSS1QUk9ELVJDQSxDTj1TQklST09UQ0FQUk9ELENOPUNEUCxDTj1QdWJsaWMlMjBLZXklMjBTZXJ2aWNlcyxDTj1TZXJ2aWNlcyxDTj1Db25maWd1cmF0aW9uLERDPUFELERDPVNCST9jZXJ0aWZpY2F0ZVJldm9jYXRpb25MaXN0P2Jhc2U/b2JqZWN0Q2xhc3M9Y1JMRGlzdHJpYnV0aW9uUG9pbnQwgbkGCCsGAQUFBwEBBIGsMIGpMIGmBggrBgEFBQcwAoaBmWxkYXA6Ly8vQ049U0JJLVBST0QtUkNBLENOPUFJQSxDTj1QdWJsaWMlMjBLZXklMjBTZXJ2aWNlcyxDTj1TZXJ2aWNlcyxDTj1Db25maWd1cmF0aW9uLERDPUFELERDPVNCST9jQUNlcnRpZmljYXRlP2Jhc2U/b2JqZWN0Q2xhc3M9Y2VydGlmaWNhdGlvbkF1dGhvcml0eTA8BgkrBgEEAYI3FQcELzAtBiUrBgEEAYI3FQiGgZxcg8eAW4P1kTeE4IFms+pkaobo0A2Dge0JAgFkAgEVMA0GCSqGSIb3DQEBCwUAA4IBAQBbwhUAEQRVQy8mKVFE3WoohhU2dPQ0w/oHuq762lr2H48Qf1o0BtgX5OI/TikqoopZ3c/G5OBqEa1uTGUV9lCEbd9UxsTCPWueVaxy9H6yXgRIhlxaplz44iRAPmZwnxdWZusmK4FVKtFvO1GPNQ6wnGlvn7u5QVKvoCUwU/1rRuxlOYZpEwHh4ozvCgbl1P6+Wr4Lb0JcszHxSYtJgsZtLjUtyplhQn7389Ili/jZ1kENQCDuqsaDYNlVxyXKPBJXRu11wvu3+Sol9o3FqrWb96LgN7S02ZhwJlNYTU6FhR65L64vgPyHO4UXtivuigHNgG4nvVUNuHJMHYHDZx1j</wsse:KeyIdentifier>
               </wsse:SecurityTokenReference>
            </ds:KeyInfo>
         </ds:Signature>
         <wsse:UsernameToken wsu:Id="UsernameToken-8374AE8FD47309F5181713973770337145">
            <xenc:EncryptedData Id="ED-8374AE8FD47309F5181713973770354153" Type="http://www.w3.org/2001/04/xmlenc#Content" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#">
               <xenc:EncryptionMethod Algorithm="http://www.w3.org/2001/04/xmlenc#aes128-cbc"/>
               <ds:KeyInfo xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
                  <wsse:SecurityTokenReference wsse11:TokenType="http://docs.oasis-open.org/wss/oasis-wss-soap-message-security-1.1#EncryptedKey" xmlns:wsse11="http://docs.oasis-open.org/wss/oasis-wss-wssecurity-secext-1.1.xsd">
                     <wsse:Reference URI="#EK-8374AE8FD47309F5181713973770353151"/>
                  </wsse:SecurityTokenReference>
               </ds:KeyInfo>
               <xenc:CipherData>
                  <xenc:CipherValue>6mIRjLJ8Hi857mtUQUx4NgLqzlewmkptugb1pYWWnemLev7I0iRe4pZwwz3SNFcxP/TWU2CxkNAxvUrJW728M9ao1ioLXDUYyTdOsXxEDv2ugFmOKGJZAeHUJATAMitd8dTSxT67YMxJjMmwwp1w0rsexUgqGRNu7LhtdaGrdbOkWvl/8FQji+UGPS8niFBlg6Vti3vpe22OjywlnWXJQEiO7Q9+hRdx/EYbc3JAXhmFsCUKV5gw1YrLyOB3Q29xXHphj3pzHK1zTYhYI0+OQQ==</xenc:CipherValue>
               </xenc:CipherData>
            </xenc:EncryptedData>
         </wsse:UsernameToken>
         <wsu:Timestamp wsu:Id="TS-8374AE8FD47309F5181713973770337144">
            <wsu:Created>2024-04-24T15:49:30.336Z</wsu:Created>
            <wsu:Expires>2024-04-25T00:09:30.336Z</wsu:Expires>
         </wsu:Timestamp>
      </wsse:Security>
   </soapenv:Header>
   <soapenv:Body wsu:Id="id-8374AE8FD47309F5181713973770342149" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
      <xenc:EncryptedData Id="ED-8374AE8FD47309F5181713973770355154" Type="http://www.w3.org/2001/04/xmlenc#Content" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#">
         <xenc:EncryptionMethod Algorithm="http://www.w3.org/2001/04/xmlenc#aes128-cbc"/>
         <ds:KeyInfo xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
            <wsse:SecurityTokenReference wsse11:TokenType="http://docs.oasis-open.org/wss/oasis-wss-soap-message-security-1.1#EncryptedKey" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:wsse11="http://docs.oasis-open.org/wss/oasis-wss-wssecurity-secext-1.1.xsd">
               <wsse:Reference URI="#EK-8374AE8FD47309F5181713973770353151"/>
            </wsse:SecurityTokenReference>
         </ds:KeyInfo>
         <xenc:CipherData>
            <xenc:CipherValue>BHP5iBgglEG/F4fr7o8lMW9l8Cc3Ks64BeaQ/GkRx37JW9OXwExv0hBvKRwA333zDzr7L7jimYI3bd/en+F1EqiAjUTrZpybVVcp6IIOJwL4Sgqu2FPdwvuzN/YIYbZ4uQHrJ72KHEWXyx5GsXMM7jKjUi+vLWG85QmCf2qSyGbY4HxOci7rT1VJcGJl+6O9aCgHj1cdSbYgqs9IFcswIwHRBWrsqmWJIauqcWbDyhssExNRj9BngcHq4aZZiOVrqxK+ZcGXaY3GjOyeprrUqpFJTRHjHytxkYnBFr+z1O7A2jRJTv2k9Kw/xPubroqAYj6EBbTz+36RY5FcTplIw2k5NqzjbXagjjc7n6rbGzWgX5Ev/el04GDMSYLzMMldZlBO9ckRhzywFe+S2l2W3CZ4WrqNqHDGLE935OdfHmmDWnVOLU8Wik3tmaOdo0F6HwIX4aG+h/G8H3XLfEoxC6HBvo9S6xhF/2f2FnRb0f7rDYZrgjgJV4mHa53oG4f2u0mOTw6vx4AGFmdoR/Sinf7slR0u/ZD/+kzUMMHCdT/m7jiwJ6MwnrOYLa58zGz/lyJqDfL+MinMpwzVWUjvXRWOEZqHvmxfgKh7OqmkyQlMOL/Ju/NULtNVUxBOC6WblwPHiPorDQPlWqwU4LbfgFstzwlB4s82Bpb6uYXHw2Rg0equvumb46pMngCZbXVmfXnwk3dbHxoEQ0OZMN8fe4+jOyNMFHQK1Yycg1qOEoCm/eYIbQbG1VVlwa6IIX4NZiXcXAnMvjgpaQSZu5/MC6jWixL6bdHPNCJJ2orJmC7r2cWeKxFCnGSCHA4Q0SP+zdMYd1/WF43m86BIMuB2XwgOm0bArwihjd+sZVTYU0nGKCTbM3n4dsvYeZUBYNcnAd84+hRtHjRTTnPdlHb5+jHLPvHLOoP5IFUadkdDe5vz3hupDMBIU0mHfAEFNz/8</xenc:CipherValue>
         </xenc:CipherData>
      </xenc:EncryptedData>
   </soapenv:Body>
</soapenv:Envelope>


<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
	<SOAP-ENV:Header>
	      <wsse:Security mustUnderstand="1">
		<wsse:UsernameToken>
			<wsse:Username>B000200206</wsse:Username>
		</wsse:UsernameToken>
        	<wsu:Timestamp>
        		<wsu:Created>30</wsu:Created>
        		<wsu:Expires>30</wsu:Expires>
		</wsu:Timestamp>
        	<ds:Signature>
          		<ds:SignedInfo>
             			<ds:CanonicalizationMethod Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/>
             				<ds:SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/>
          		</ds:SignedInfo>
        	</ds:Signature>
  	     </wsse:Security>
  	</SOAP-ENV:Header>
  	<SOAP-ENV:Body/>
</SOAP-ENV:Envelope>



//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//import org.bouncycastle.util.Arrays;
//import org.bouncycastle.x509.X509V3CertificateGenerator;
//
//import javax.crypto.Cipher;
//import javax.crypto.KeyGenerator;
//import javax.crypto.SecretKey;
//import javax.crypto.spec.SecretKeySpec;
//import javax.security.auth.x500.X500Principal;
//import java.io.FileInputStream;
//import java.io.FileOutputStream;
//import java.security.*;
//import java.security.cert.Certificate;
//import java.security.cert.CertificateFactory;
//import java.security.cert.X509Certificate;
//import java.util.Base64;
//import java.util.Date;
//import java.math.BigInteger;
//
//public class App {
//
//    public static void main(String[] args) throws Exception {
//        Security.addProvider(new BouncyCastleProvider());
//
//        String keystoreFilePath = "src/main/resources/keystore.jks";
//        String keystorePassword = "keystorePassword";
//        String keyAlias = "keyAlias";
//        String keyPassword = "keyPassword";
//        generateKeyPairAndStoreInJKS(keystoreFilePath, keystorePassword, keyAlias, keyPassword);
//
//        // Step 2: Encrypt the plaintext XML using the generated key pair
//        String plaintextXml = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">\n" +
//                "\t<SOAP-ENV:Header>\n" +
//                "\t      <wsse:Security mustUnderstand=\"1\">\n" +
//                "\t\t<wsse:UsernameToken>\n" +
//                "\t\t\t<wsse:Username>B000200206</wsse:Username>\n" +
//                "\t\t</wsse:UsernameToken>\n" +
//                "        \t<wsu:Timestamp>\n" +
//                "\t\t\t<wsu:Created>30</wsu:Created>\n" +
//                "\t\t\t<wsu:Expires>30</wsu:Expires>\n" +
//                "\t\t</wsu:Timestamp>\n" +
//                "        \t<ds:Signature>\n" +
//                "\t  \t\t<ds:SignedInfo>\n" +
//                "\t      \t\t\t<ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>\n" +
//                "\t      \t\t\t<ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>\n" +
//                "\t  \t\t</ds:SignedInfo>\n" +
//                "\t\t</ds:Signature>\n" +
//                "\t   \t\t</wsse:Security>\n" +
//                "\t</SOAP-ENV:Header>\n" +
//                "\t<SOAP-ENV:Body/>\n" +
//                "</SOAP-ENV:Envelope>";
//
//        String encryptedXml = encryptXml(plaintextXml, keystoreFilePath, keystorePassword, keyAlias);
//        System.out.println(decryptXml(encryptedXml, keystoreFilePath, keystorePassword, keyAlias, keyPassword));
//        // Step 3: Output the encrypted XML
//        System.out.println("Encrypted XML:");
//        System.out.println(encryptedXml);
//    }
//
//    private static void generateKeyPairAndStoreInJKS(String keystoreFilePath, String keystorePassword,
//                                                      String keyAlias, String keyPassword) throws Exception {
//        KeyPairGenerator keyPairGenerator = KeyPairGenerator.getInstance("RSA");
//        keyPairGenerator.initialize(2048);
//        KeyPair keyPair = keyPairGenerator.generateKeyPair();
//
//        X509Certificate certificate = generateSelfSignedCertificate(keyPair);
//
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        keyStore.load(null, null);
//        keyStore.setKeyEntry(keyAlias, keyPair.getPrivate(), keyPassword.toCharArray(), new Certificate[]{certificate});
//
//        try (FileOutputStream fos = new FileOutputStream(keystoreFilePath)) {
//            keyStore.store(fos, keystorePassword.toCharArray());
//        }
//    }
//
//    private static X509Certificate generateSelfSignedCertificate(KeyPair keyPair) throws Exception {
//        PublicKey publicKey = keyPair.getPublic();
//        PrivateKey privateKey = keyPair.getPrivate();
//
//        // Generate a new X.509 certificate instance
//        X509Certificate cert = null;
//
//        try {
//            // Create a new X.509 certificate generator
//            CertificateFactory certFactory = CertificateFactory.getInstance("X.509");
//            X509V3CertificateGenerator certGenerator = new X509V3CertificateGenerator();
//
//            // Set certificate information
//            X500Principal subjectName = new X500Principal("CN=example");
//            certGenerator.setSerialNumber(BigInteger.valueOf(System.currentTimeMillis()));
//            certGenerator.setSubjectDN(subjectName);
//            certGenerator.setIssuerDN(subjectName); // Self-signed
//            certGenerator.setPublicKey(publicKey);
//            certGenerator.setNotBefore(new Date());
//            certGenerator.setNotAfter(new Date(System.currentTimeMillis() + 365 * 24 * 60 * 60 * 1000)); // Valid for 1 year
//            certGenerator.setSignatureAlgorithm("SHA256WithRSAEncryption");
//
//            // Generate the certificate
//            cert = certGenerator.generate(privateKey);
//        } catch (Exception e) {
//            e.printStackTrace();
//        }
//
//        return cert;
//    }
//
//    private static String encryptXml(String plaintextXml, String keystoreFilePath, String keystorePassword, String keyAlias) throws Exception {
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        try (FileInputStream fis = new FileInputStream(keystoreFilePath)) {
//            keyStore.load(fis, keystorePassword.toCharArray());
//        }
//        PublicKey publicKey = keyStore.getCertificate(keyAlias).getPublicKey();
//
//        // Generate a symmetric key for encrypting the XML data
//        KeyGenerator keyGen = KeyGenerator.getInstance("AES");
//        keyGen.init(256);
//        SecretKey secretKey = keyGen.generateKey();
//
//        // Encrypt the XML data symmetrically
//        Cipher symmetricCipher = Cipher.getInstance("AES");
//        symmetricCipher.init(Cipher.ENCRYPT_MODE, secretKey);
//        byte[] encryptedXmlBytes = symmetricCipher.doFinal(plaintextXml.getBytes());
//
//        // Encrypt the symmetric key with the RSA public key
//        Cipher rsaCipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding");
//        rsaCipher.init(Cipher.ENCRYPT_MODE, publicKey);
//        byte[] encryptedKeyBytes = rsaCipher.doFinal(secretKey.getEncoded());
//
//        // Concatenate the encrypted key and the encrypted XML data
//        byte[] encryptedData = new byte[encryptedKeyBytes.length + encryptedXmlBytes.length];
//        System.arraycopy(encryptedKeyBytes, 0, encryptedData, 0, encryptedKeyBytes.length);
//        System.arraycopy(encryptedXmlBytes, 0, encryptedData, encryptedKeyBytes.length, encryptedXmlBytes.length);
//
//        // Encode the concatenated bytes to Base64
//        return Base64.getEncoder().encodeToString(encryptedData);
//    }
//
//    private static String decryptXml(String encryptedXml, String keystoreFilePath, String keystorePassword, String keyAlias, String keyPassword) throws Exception {
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        try (FileInputStream fis = new FileInputStream(keystoreFilePath)) {
//            keyStore.load(fis, keystorePassword.toCharArray());
//        }
//        PrivateKey privateKey = (PrivateKey) keyStore.getKey(keyAlias, keyPassword.toCharArray());
//
//        // Decode the Base64-encoded string
//        byte[] encryptedData = Base64.getDecoder().decode(encryptedXml);
//
//        // Separate the encrypted key and the encrypted XML data
//        int rsaKeySize = 2048;
//        int encryptedKeyLength = rsaKeySize / 8; // Length of the encrypted AES key
//        byte[] encryptedKeyBytes = Arrays.copyOfRange(encryptedData, 0, encryptedKeyLength);
//        byte[] encryptedXmlBytes = Arrays.copyOfRange(encryptedData, encryptedKeyLength, encryptedData.length);
//
//        // Decrypt the symmetric key with the RSA private key
//        Cipher rsaCipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding");
//        rsaCipher.init(Cipher.DECRYPT_MODE, privateKey);
//        byte[] decryptedKeyBytes = rsaCipher.doFinal(encryptedKeyBytes);
//        SecretKey secretKey = new SecretKeySpec(decryptedKeyBytes, "AES");
//
//        // Decrypt the XML data symmetrically
//        Cipher symmetricCipher = Cipher.getInstance("AES");
//        symmetricCipher.init(Cipher.DECRYPT_MODE, secretKey);
//        byte[] decryptedXmlBytes = symmetricCipher.doFinal(encryptedXmlBytes);
//
//        // Convert the decrypted bytes to string
//        return new String(decryptedXmlBytes);
//    }
//}


all.java
package com.example.rest_service;
////
/////**
//// * Hello world!
//// *
//// */
////public class App 
////{
////    public static void main( String[] args )
////    {
////        System.out.println( "Hello World!" );
////    }
////}
//
//
//import javax.crypto.Cipher;
//
//import org.bouncycastle.asn1.x500.X500Name;
//
//import java.io.FileInputStream;
//import java.io.FileOutputStream;
//import java.security.*;
//import java.security.cert.Certificate;
//import java.security.cert.X509Certificate;
//import java.util.Base64;
//
//import java.util.Date;
//
//public class App {
//
//    public static void main(String[] args) throws Exception {
//     
//    	String keystoreFilePath = "src/main/resources/keystore.jks";
//    	String keystorePassword = "keystorePassword";
//    	String keyAlias = "keyAlias";
//    	String keyPassword = "keyPassword";
//    	generateKeyPairAndStoreInJKS(keystoreFilePath, keystorePassword, keyAlias, keyPassword);
//
//
//        // Step 2: Encrypt the plaintext XML using the generated key pair
//        String plaintextXml = "<root><data>Some sensitive information</data></root>";
//        String encryptedXml = encryptXml(plaintextXml, keystoreFilePath, keystorePassword, keyAlias);
//
//        // Step 3: Output the encrypted XML
//        System.out.println("Encrypted XML:");
//        System.out.println(encryptedXml);
//    }
//
//    private static void generateKeyPairAndStoreInJKS(String keystoreFilePath, String keystorePassword,
//                                                      String keyAlias, String keyPassword) throws Exception {
//        KeyPairGenerator keyPairGenerator = KeyPairGenerator.getInstance("RSA");
//        keyPairGenerator.initialize(2048);
//        KeyPair keyPair = keyPairGenerator.generateKeyPair();
//
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        keyStore.load(null, null);
//        X509Certificate certificate = generateSelfSignedCertificate(keyPair);
//        
//        keyStore.setKeyEntry(keyAlias, keyPair.getPrivate(), keyPassword.toCharArray(), new Certificate[]{certificate});
//try (FileOutputStream fos = new FileOutputStream(keystoreFilePath)) {
//            keyStore.store(fos, keystorePassword.toCharArray());
//        }
//    }
//    private static X509Certificate generateSelfSignedCertificate(KeyPair keyPair) throws Exception {
//        X509CertInfo info = new X509CertInfo();
//        info.set(X509CertInfo.SUBJECT, new X500Name("CN=example"));
//        info.set(X509CertInfo.ISSUER, new X500Name("CN=example"));
//        info.set(X509CertInfo.KEY, new CertificateX509Key(keyPair.getPublic()));
//        info.set(X509CertInfo.VERSION, new CertificateVersion(CertificateVersion.V3));
//        info.set(X509CertInfo.SERIAL_NUMBER, new CertificateSerialNumber(1));
//        info.set(X509CertInfo.VALIDITY, new CertificateValidity(new Date(), new Date(System.currentTimeMillis() + 365 * 24 * 60 * 60 * 1000)));
//        info.set(X509CertInfo.ALGORITHM_ID, new CertificateAlgorithmId(new AlgorithmId(AlgorithmId.sha256WithRSAEncryption_oid)));
//
//        // Create a new certificate signed by itself
//        X509CertImpl cert = new X509CertImpl(info);
//        cert.sign(keyPair.getPrivate(), "SHA256withRSA");
//
//        return cert;
//    }
//    private static String encryptXml(String plaintextXml, String keystoreFilePath, String keystorePassword, String keyAlias) throws Exception {
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        try (FileInputStream fis = new FileInputStream(keystoreFilePath)) {
//            keyStore.load(fis, keystorePassword.toCharArray());
//        }
//        PublicKey publicKey = keyStore.getCertificate(keyAlias).getPublicKey();
//
//        Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding");
//        cipher.init(Cipher.ENCRYPT_MODE, publicKey);
//
//        byte[] encryptedBytes = cipher.doFinal(plaintextXml.getBytes());
//
//        return Base64.getEncoder().encodeToString(encryptedBytes);
//    }
//}
//
//
//import javax.crypto.Cipher;
//import javax.security.auth.x500.X500Principal;
//
//import org.bouncycastle.x509.X509V3CertificateGenerator;
//
//import java.io.FileInputStream;
//import java.io.FileOutputStream;
//import java.security.*;
//import java.security.cert.Certificate;
//import java.security.cert.CertificateFactory;
//import java.security.cert.X509Certificate;
//import java.util.Base64;
//import java.util.Date;
//import java.math.BigInteger;
//
//
//public class App {
//
//    public static void main(String[] args) throws Exception {
//
//        String keystoreFilePath = "src/main/resources/keystore.jks";
//        String keystorePassword = "keystorePassword";
//        String keyAlias = "keyAlias";
//        String keyPassword = "keyPassword";
//        generateKeyPairAndStoreInJKS(keystoreFilePath, keystorePassword, keyAlias, keyPassword);
//
//        // Step 2: Encrypt the plaintext XML using the generated key pair
//        String plaintextXml = "<root><data>Some sensitive information</data></root>";
//        String encryptedXml = encryptXml(plaintextXml, keystoreFilePath, keystorePassword, keyAlias);
//
//        // Step 3: Output the encrypted XML
//        System.out.println("Encrypted XML:");
//        System.out.println(encryptedXml);
//    }
//
//    private static void generateKeyPairAndStoreInJKS(String keystoreFilePath, String keystorePassword,
//                                                      String keyAlias, String keyPassword) throws Exception {
//        KeyPairGenerator keyPairGenerator = KeyPairGenerator.getInstance("RSA");
//        keyPairGenerator.initialize(2048);
//        KeyPair keyPair = keyPairGenerator.generateKeyPair();
//
//        X509Certificate certificate = generateSelfSignedCertificate(keyPair);
//
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        keyStore.load(null, null);
//        keyStore.setKeyEntry(keyAlias, keyPair.getPrivate(), keyPassword.toCharArray(), new Certificate[]{certificate});
//
//        try (FileOutputStream fos = new FileOutputStream(keystoreFilePath)) {
//            keyStore.store(fos, keystorePassword.toCharArray());
//        }
//    }
//
//    private static X509Certificate generateSelfSignedCertificate(KeyPair keyPair) throws Exception {
//        PublicKey publicKey = keyPair.getPublic();
//        PrivateKey privateKey = keyPair.getPrivate();
//
//        // Generate a new X.509 certificate instance
//        X509Certificate cert = null;
//
//        try {
//            // Create a new X.509 certificate generator
//            CertificateFactory certFactory = CertificateFactory.getInstance("X.509");
//            X509V3CertificateGenerator certGenerator = new X509V3CertificateGenerator();
//
//            // Set certificate information
//            X500Principal subjectName = new X500Principal("CN=example");
//            certGenerator.setSerialNumber(BigInteger.valueOf(System.currentTimeMillis()));
//            certGenerator.setSubjectDN(subjectName);
//            certGenerator.setIssuerDN(subjectName); // Self-signed
//            certGenerator.setPublicKey(publicKey);
//            certGenerator.setNotBefore(new Date());
//            certGenerator.setNotAfter(new Date(System.currentTimeMillis() + 365 * 24 * 60 * 60 * 1000)); // Valid for 1 year
//            certGenerator.setSignatureAlgorithm("SHA256WithRSAEncryption");
//
//            // Generate the certificate
//            cert = certGenerator.generate(privateKey);
//        } catch (Exception e) {
//            e.printStackTrace();
//        }
//
//        return cert;
//    }
//
//    private static String encryptXml(String plaintextXml, String keystoreFilePath, String keystorePassword, String keyAlias) throws Exception {
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        try (FileInputStream fis = new FileInputStream(keystoreFilePath)) {
//            keyStore.load(fis, keystorePassword.toCharArray());
//        }
//        PublicKey publicKey = keyStore.getCertificate(keyAlias).getPublicKey();
//
//        Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding");
//        cipher.init(Cipher.ENCRYPT_MODE, publicKey);
//
//        byte[] encryptedBytes = cipher.doFinal(plaintextXml.getBytes());
//
//        return Base64.getEncoder().encodeToString(encryptedBytes);
//    }
//}

//
//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//import org.bouncycastle.x509.X509V3CertificateGenerator;
//
//import javax.crypto.Cipher;
//import javax.security.auth.x500.X500Principal;
//import java.io.FileInputStream;
//import java.io.FileOutputStream;
//import java.security.*;
//import java.security.cert.Certificate;
//import java.security.cert.CertificateFactory;
//import java.security.cert.X509Certificate;
//import java.util.Base64;
//import java.util.Date;
//import java.math.BigInteger;
//
//public class App {
//
//    public static void main(String[] args) throws Exception {
//        Security.addProvider(new BouncyCastleProvider());
//
//        String keystoreFilePath = "src/main/resources/keystore.jks";
//        String keystorePassword = "keystorePassword";
//        String keyAlias = "keyAlias";
//        String keyPassword = "keyPassword";
//        generateKeyPairAndStoreInJKS(keystoreFilePath, keystorePassword, keyAlias, keyPassword);
//
//        // Step 2: Encrypt the plaintext XML using the generated key pair
//        String plaintextXml = "<root><data>Some sensitive information</data></root>";
//        String encryptedXml = encryptXml(plaintextXml, keystoreFilePath, keystorePassword, keyAlias);
//
//        // Step 3: Output the encrypted XML
//        System.out.println("Encrypted XML:");
//        System.out.println(encryptedXml);
//    }
//
//    private static void generateKeyPairAndStoreInJKS(String keystoreFilePath, String keystorePassword,
//                                                      String keyAlias, String keyPassword) throws Exception {
//        KeyPairGenerator keyPairGenerator = KeyPairGenerator.getInstance("RSA");
//        keyPairGenerator.initialize(2048);
//        KeyPair keyPair = keyPairGenerator.generateKeyPair();
//
//        X509Certificate certificate = generateSelfSignedCertificate(keyPair);
//
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        keyStore.load(null, null);
//        keyStore.setKeyEntry(keyAlias, keyPair.getPrivate(), keyPassword.toCharArray(), new Certificate[]{certificate});
//
//        try (FileOutputStream fos = new FileOutputStream(keystoreFilePath)) {
//            keyStore.store(fos, keystorePassword.toCharArray());
//        }
//    }
//
//    private static X509Certificate generateSelfSignedCertificate(KeyPair keyPair) throws Exception {
//        PublicKey publicKey = keyPair.getPublic();
//        PrivateKey privateKey = keyPair.getPrivate();
//
//        // Generate a new X.509 certificate instance
//        X509Certificate cert = null;
//
//        try {
//            // Create a new X.509 certificate generator
//            CertificateFactory certFactory = CertificateFactory.getInstance("X.509");
//            X509V3CertificateGenerator certGenerator = new X509V3CertificateGenerator();
//
//            // Set certificate information
//            X500Principal subjectName = new X500Principal("CN=example");
//            certGenerator.setSerialNumber(BigInteger.valueOf(System.currentTimeMillis()));
//            certGenerator.setSubjectDN(subjectName);
//            certGenerator.setIssuerDN(subjectName); // Self-signed
//            certGenerator.setPublicKey(publicKey);
//            certGenerator.setNotBefore(new Date());
//            certGenerator.setNotAfter(new Date(System.currentTimeMillis() + 365 * 24 * 60 * 60 * 1000)); // Valid for 1 year
//            certGenerator.setSignatureAlgorithm("SHA256WithRSAEncryption");
//
//            // Generate the certificate
//            cert = certGenerator.generate(privateKey);
//        } catch (Exception e) {
//            e.printStackTrace();
//        }
//
//        return cert;
//    }
//
//    private static String encryptXml(String plaintextXml, String keystoreFilePath, String keystorePassword, String keyAlias) throws Exception {
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        try (FileInputStream fis = new FileInputStream(keystoreFilePath)) {
//            keyStore.load(fis, keystorePassword.toCharArray());
//        }
//        PublicKey publicKey = keyStore.getCertificate(keyAlias).getPublicKey();
//
//        Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding");
//        cipher.init(Cipher.ENCRYPT_MODE, publicKey);
//
//        byte[] encryptedBytes = cipher.doFinal(plaintextXml.getBytes());
//
//        return Base64.getEncoder().encodeToString(encryptedBytes);
//    }
//}

//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//import org.bouncycastle.util.Arrays;
//import org.bouncycastle.x509.X509V3CertificateGenerator;
//
//import javax.crypto.Cipher;
//import javax.crypto.KeyGenerator;
//import javax.crypto.SecretKey;
//import javax.crypto.spec.SecretKeySpec;
//import javax.security.auth.x500.X500Principal;
//import java.io.FileInputStream;
//import java.io.FileOutputStream;
//import java.security.*;
//import java.security.cert.Certificate;
//import java.security.cert.CertificateFactory;
//import java.security.cert.X509Certificate;
//import java.util.Base64;
//import java.util.Date;
//import java.math.BigInteger;
//
//public class App {
//
//    public static void main(String[] args) throws Exception {
//        Security.addProvider(new BouncyCastleProvider());
//
//        String keystoreFilePath = "src/main/resources/keystore.jks";
//        String keystorePassword = "keystorePassword";
//        String keyAlias = "keyAlias";
//        String keyPassword = "keyPassword";
//        generateKeyPairAndStoreInJKS(keystoreFilePath, keystorePassword, keyAlias, keyPassword);
//
//        // Step 2: Encrypt the plaintext XML using the generated key pair
//        String plaintextXml = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">\n" +
//                "\t<SOAP-ENV:Header>\n" +
//                "\t      <wsse:Security mustUnderstand=\"1\">\n" +
//                "\t\t<wsse:UsernameToken>\n" +
//                "\t\t\t<wsse:Username>B000200206</wsse:Username>\n" +
//                "\t\t</wsse:UsernameToken>\n" +
//                "        \t<wsu:Timestamp>\n" +
//                "\t\t\t<wsu:Created>30</wsu:Created>\n" +
//                "\t\t\t<wsu:Expires>30</wsu:Expires>\n" +
//                "\t\t</wsu:Timestamp>\n" +
//                "        \t<ds:Signature>\n" +
//                "\t  \t\t<ds:SignedInfo>\n" +
//                "\t      \t\t\t<ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>\n" +
//                "\t      \t\t\t<ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>\n" +
//                "\t  \t\t</ds:SignedInfo>\n" +
//                "\t\t</ds:Signature>\n" +
//                "\t   \t\t</wsse:Security>\n" +
//                "\t</SOAP-ENV:Header>\n" +
//                "\t<SOAP-ENV:Body/>\n" +
//                "</SOAP-ENV:Envelope>";
//
//        String encryptedXml = encryptXml(plaintextXml, keystoreFilePath, keystorePassword, keyAlias);
//        System.out.println(decryptXml(encryptedXml, keystoreFilePath, keystorePassword, keyAlias, keyPassword));
//        // Step 3: Output the encrypted XML
//        System.out.println("Encrypted XML:");
//        System.out.println(encryptedXml);
//    }
//
//    private static void generateKeyPairAndStoreInJKS(String keystoreFilePath, String keystorePassword,
//                                                      String keyAlias, String keyPassword) throws Exception {
//        KeyPairGenerator keyPairGenerator = KeyPairGenerator.getInstance("RSA");
//        keyPairGenerator.initialize(2048);
//        KeyPair keyPair = keyPairGenerator.generateKeyPair();
//
//        X509Certificate certificate = generateSelfSignedCertificate(keyPair);
//
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        keyStore.load(null, null);
//        keyStore.setKeyEntry(keyAlias, keyPair.getPrivate(), keyPassword.toCharArray(), new Certificate[]{certificate});
//
//        try (FileOutputStream fos = new FileOutputStream(keystoreFilePath)) {
//            keyStore.store(fos, keystorePassword.toCharArray());
//        }
//    }
//
//    private static X509Certificate generateSelfSignedCertificate(KeyPair keyPair) throws Exception {
//        PublicKey publicKey = keyPair.getPublic();
//        PrivateKey privateKey = keyPair.getPrivate();
//
//        // Generate a new X.509 certificate instance
//        X509Certificate cert = null;
//
//        try {
//            // Create a new X.509 certificate generator
//            CertificateFactory certFactory = CertificateFactory.getInstance("X.509");
//            X509V3CertificateGenerator certGenerator = new X509V3CertificateGenerator();
//
//            // Set certificate information
//            X500Principal subjectName = new X500Principal("CN=example");
//            certGenerator.setSerialNumber(BigInteger.valueOf(System.currentTimeMillis()));
//            certGenerator.setSubjectDN(subjectName);
//            certGenerator.setIssuerDN(subjectName); // Self-signed
//            certGenerator.setPublicKey(publicKey);
//            certGenerator.setNotBefore(new Date());
//            certGenerator.setNotAfter(new Date(System.currentTimeMillis() + 365 * 24 * 60 * 60 * 1000)); // Valid for 1 year
//            certGenerator.setSignatureAlgorithm("SHA256WithRSAEncryption");
//
//            // Generate the certificate
//            cert = certGenerator.generate(privateKey);
//        } catch (Exception e) {
//            e.printStackTrace();
//        }
//
//        return cert;
//    }
//
//    private static String encryptXml(String plaintextXml, String keystoreFilePath, String keystorePassword, String keyAlias) throws Exception {
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        try (FileInputStream fis = new FileInputStream(keystoreFilePath)) {
//            keyStore.load(fis, keystorePassword.toCharArray());
//        }
//        PublicKey publicKey = keyStore.getCertificate(keyAlias).getPublicKey();
//
//        // Generate a symmetric key for encrypting the XML data
//        KeyGenerator keyGen = KeyGenerator.getInstance("AES");
//        keyGen.init(256);
//        SecretKey secretKey = keyGen.generateKey();
//
//        // Encrypt the XML data symmetrically
//        Cipher symmetricCipher = Cipher.getInstance("AES");
//        symmetricCipher.init(Cipher.ENCRYPT_MODE, secretKey);
//        byte[] encryptedXmlBytes = symmetricCipher.doFinal(plaintextXml.getBytes());
//
//        // Encrypt the symmetric key with the RSA public key
//        Cipher rsaCipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding");
//        rsaCipher.init(Cipher.ENCRYPT_MODE, publicKey);
//        byte[] encryptedKeyBytes = rsaCipher.doFinal(secretKey.getEncoded());
//
//        // Concatenate the encrypted key and the encrypted XML data
//        byte[] encryptedData = new byte[encryptedKeyBytes.length + encryptedXmlBytes.length];
//        System.arraycopy(encryptedKeyBytes, 0, encryptedData, 0, encryptedKeyBytes.length);
//        System.arraycopy(encryptedXmlBytes, 0, encryptedData, encryptedKeyBytes.length, encryptedXmlBytes.length);
//
//        // Encode the concatenated bytes to Base64
//        return Base64.getEncoder().encodeToString(encryptedData);
//    }
//
//    private static String decryptXml(String encryptedXml, String keystoreFilePath, String keystorePassword, String keyAlias, String keyPassword) throws Exception {
//        KeyStore keyStore = KeyStore.getInstance("JKS");
//        try (FileInputStream fis = new FileInputStream(keystoreFilePath)) {
//            keyStore.load(fis, keystorePassword.toCharArray());
//        }
//        PrivateKey privateKey = (PrivateKey) keyStore.getKey(keyAlias, keyPassword.toCharArray());
//
//        // Decode the Base64-encoded string
//        byte[] encryptedData = Base64.getDecoder().decode(encryptedXml);
//
//        // Separate the encrypted key and the encrypted XML data
//        int rsaKeySize = 2048;
//        int encryptedKeyLength = rsaKeySize / 8; // Length of the encrypted AES key
//        byte[] encryptedKeyBytes = Arrays.copyOfRange(encryptedData, 0, encryptedKeyLength);
//        byte[] encryptedXmlBytes = Arrays.copyOfRange(encryptedData, encryptedKeyLength, encryptedData.length);
//
//        // Decrypt the symmetric key with the RSA private key
//        Cipher rsaCipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding");
//        rsaCipher.init(Cipher.DECRYPT_MODE, privateKey);
//        byte[] decryptedKeyBytes = rsaCipher.doFinal(encryptedKeyBytes);
//        SecretKey secretKey = new SecretKeySpec(decryptedKeyBytes, "AES");
//
//        // Decrypt the XML data symmetrically
//        Cipher symmetricCipher = Cipher.getInstance("AES");
//        symmetricCipher.init(Cipher.DECRYPT_MODE, secretKey);
//        byte[] decryptedXmlBytes = symmetricCipher.doFinal(encryptedXmlBytes);
//
//        // Convert the decrypted bytes to string
//        return new String(decryptedXmlBytes);
//    }
//}

import org.apache.wss4j.common.crypto.CryptoFactory;
import org.apache.wss4j.common.ext.WSSecurityException;
import org.apache.wss4j.common.util.Loader;
import org.apache.wss4j.dom.WSConstants;
import org.apache.wss4j.dom.WSDataRef;
import org.apache.wss4j.dom.handler.WSHandlerConstants;
import org.apache.wss4j.dom.message.WSSecHeader;
import org.apache.wss4j.dom.message.WSSecSignature;
import org.apache.wss4j.dom.message.WSSecEncrypt;
import org.apache.wss4j.dom.message.WSSecUsernameToken;
import org.apache.wss4j.dom.util.WSSecurityUtil;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.apache.wss4j.common.crypto.Crypto;

import javax.crypto.SecretKey;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.transform.OutputKeys;
import javax.xml.transform.Transformer;
import javax.xml.transform.TransformerFactory;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;
import java.io.StringWriter;
import java.util.List;

import org.apache.wss4j.dom.WSDocInfo;
import org.apache.wss4j.dom.engine.WSSConfig;

import javax.xml.parsers.ParserConfigurationException;
import java.security.cert.CertificateException;
import java.security.cert.X509Certificate;


public class App {

    public static void main(String[] args) throws Exception {
        // Load the plain XML request
        String plainXML = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" " +
                "xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" " +
                "xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" " +
                "xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">" +
                "<SOAP-ENV:Header><wsse:Security mustUnderstand=\"1\">" +
                "<wsse:UsernameToken><wsse:Username>B000200206</wsse:Username></wsse:UsernameToken>" +
                "<wsu:Timestamp><wsu:Created>2024-05-19T00:00:30Z</wsu:Created>" +
                "<wsu:Expires>2024-05-19T00:00:60Z</wsu:Expires></wsu:Timestamp>" +
                "<ds:Signature><ds:SignedInfo>" +
                "<ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>" +
                "<ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>" +
                "</ds:SignedInfo></ds:Signature></wsse:Security></SOAP-ENV:Header><SOAP-ENV:Body/></SOAP-ENV:Envelope>";

        DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
        dbf.setNamespaceAware(true);
        DocumentBuilder db = dbf.newDocumentBuilder();
        Document document = db.parse(new java.io.ByteArrayInputStream(plainXML.getBytes()));

        // Load the keystore
        Crypto crypto = CryptoFactory.getInstance("crypto.properties");

        // Encrypt and sign the document
        WSSEncryptAndSignExample example = new WSSEncryptAndSignExample();
        Document encryptedAndSignedDoc = example.encryptAndSignDocument();
        System.out.println(encryptedAndSignedDoc);

        // Print the encrypted document
        TransformerFactory tf = TransformerFactory.newInstance();
        Transformer transformer = tf.newTransformer();
        transformer.setOutputProperty(OutputKeys.INDENT, "yes");
        StringWriter writer = new StringWriter();
        transformer.transform(new DOMSource(encryptedAndSignedDoc), new StreamResult(writer));
        System.out.println(writer.toString());
    }

//    private static Document encryptAndSignDocument(Document doc, Crypto crypto) throws WSSecurityException {
//        WSSecHeader secHeader = new WSSecHeader(doc);
//        secHeader.insertSecurityHeader();
//
//        // Create a UsernameToken
//        WSSecUsernameToken usernameToken = new WSSecUsernameToken(secHeader);
//        usernameToken.setUserInfo("B000200206", "abcdefgh12");
//        usernameToken.build();
//
//        // Signature
//        WSSecSignature signature = new WSSecSignature( secHeader);
//        signature.setUserInfo("uat", "Abc@1234");
//        signature.setKeyIdentifierType(WSConstants.BST_DIRECT_REFERENCE); // Binary Security Token
//        signature.build(crypto);
//
//        // Encryption
//        WSSecEncrypt encryption = new WSSecEncrypt(doc);
//        encryption.setUserInfo("uat", "Abc@1234");
//        encryption.setKeyIdentifierType(WSConstants.BST_DIRECT_REFERENCE); // Binary Security Token
//        List<WSDataRef> references = encryption.build( crypto,);
//
//        WSSecurityUtil.prependChildElement(secHeader.getSecurityHeader(), (Element) references.get(0).getProtectedElement().getParentNode());
//
//        return doc;
//    }
    public Document encryptAndSignDocument() throws Exception {
        Document doc = createDocument();
        WSSConfig.init();

        // Create a security header
        WSSecHeader secHeader = new WSSecHeader(doc);
        secHeader.insertSecurityHeader();

        // Create a UsernameToken
        WSSecUsernameToken usernameToken = new WSSecUsernameToken();
        usernameToken.setUserInfo("B000200206", "abcdefgh12");
        usernameToken.build(doc, secHeader);

        // Signature
        WSSecSignature signature = new WSSecSignature();
        signature.setUserInfo("uat", "Abc@1234");
        signature.setKeyIdentifierType(WSConstants.X509_KEY_IDENTIFIER);
        signature.build(doc, null, secHeader);

        // Encryption
        WSSecEncrypt encryption = new WSSecEncrypt();
        encryption.setUserInfo("uat", "Abc@1234");
        encryption.setKeyIdentifierType(WSConstants.X509_KEY_IDENTIFIER);
        encryption.build(doc, null, secHeader);

        List<javax.xml.crypto.dsig.Reference> referenceList = encryption.encrypt();

        WSSecurityUtil.prependChildElement(secHeader.getSecurityHeader(), referenceList.get(0).getElement());

        return doc;
    }

    private Document createDocument() throws ParserConfigurationException {
        return DocumentBuilderFactory.newInstance().newDocumentBuilder().newDocument();
    }


}


MIICyzCCAbOgAwIBAgIEEElUbzANBgkqhkiG9w0BAQUFADAWMRQwEgYDVQQDEwtJ
bmZvc3lzIEx0ZDAeFw0yMjA5MjIwNDM4MzJaFw0yNDA1MTQwNDM4MzJaMBYxFDAS
BgNVBAMTC0luZm9zeXMgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKC
AQEAhfamuA3VA3M+TrbcAkQgpe2jZZJNjy6QFGy3HfUB9RZUtwb8awvMa5HTrQ/3
/U/XRZs8Kg+i9wuhW7aoHnhv7qF2coyz2ZHOqezrcHzWA8ZLuGNB5W71TdqRw6Sk
lPixHtyM5lH7tJhtaI3HTOUQqYbyNI1+Z/NcEXA938iJcRRhzhb8ypLxe3iZcO02
80p0sR73RpLq/LhTKDm05zaTzh0oFHqQ3kb9KJZVgWCeKxrTcnb+RUKtivPmsLXd
m4sOsYhJAzbj7NbltC7GdZaE0WfqNfvNH0VMJXHYganyYVnMHB9cgwDdP2B/n6pi
XNCY8FrLi1A97EXUxBHEP6KQIDAQABoyEwHzAdBgNVHQ4EFgQU1Q0s/iuIoZVh6s
OIGEWDTQDn55swDQYJKoZIhvcNAQEFBQADggEBAER+dTj6piRWFj3L1cHavW8vFF
TvhuOwjr0SGHgBmzw+qyIYFOnCXyhJehtvWWk1Nsza1eNPrlMZaB34oXcTk6TuEn
YKuEIxpszFnldQa0ou+X05JatzQPVKgfWktAA2VDSXu+oPDCQhs0t0QgV4VnDe/q
tjHpvZHs+qVy8mfaem8sEAASa47RMdJhf3tudCB9qs5b3F9eIuIc3b1WZ8jIEN4M
T2zQFZKizL1MzLlDq2JRCH0Y4Y8m7qzJNXjQIxk5N3qMQmp1RvFUKXzXElDJ6XwS
OkH9jqxW4Cdxmx6vk2ok2zzRiJ9HhmPyrbOvqiqSLfGMyelR9kPEKYRITok=




<soapenv:Envelope xmlns:dit="http://iec.incometax.gov.in/ditsecws" xmlns:req="http://iec.incometax.gov.in/ditsecws/request" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
    <soapenv:Header>
        <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
            <wsse:BinarySecurityToken EncodingType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary" ValueType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-x509-token-profile-1.0#X509v3" wsu:Id="8374AE8FD47309F5181713973770353152">MIICyzCCAbOgAwIBAgIEEElUbzANBgkqhkiG9w0BAQUFADAWMRQwEgYDVQQDEwtJbmZvc3lzIEx0ZDAeFw0yMjA5MjIwNDM4MzJaFw0yNDA1MTQwNDM4MzJaMBYxFDASBgNVBAMTC0luZm9zeXMgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhfamuA3VA3M+7TrbcAkQgpe2jZZJNjy6QFGy3HfUB9RZUtwb8awvMa5HTrQ/3/U/XRZs8Kg+i9wuhW7aoHnhv7qF2coyz2ZHOqezrcHzWA8ZLuGNB5W71TdqRw6SklPixHtyM5lH7tJhtaI3HTOUQqYbyNI1+Z/NcEXA938iJcRRhzhb8ypLxe3iZcO0280p0sR73RpLq/LhTKDm05zaTzh0oFHqQ3kb9KJZVgWCeKxrTcnb+1RUKtivPmsLXdm4sOsYhJAzbj7NbltC7GdZaE0WfqNfvNH0VMJXHYganyYVnMHB9cgwDdP2B/n6piXNCY8FrLi1A97EXUxBHEP6KQIDAQABoyEwHzAdBgNVHQ4EFgQU1Q0s/iuIoZVh6sOIGEWDTQDn55swDQYJKoZIhvcNAQEFBQADggEBAER+9dTj6piRWFj3L1cHavW8vFFTvhuOwjr0SGHgBmzw+qyIYFOnCXyhJehtvWWk1Nsza1eNPrlMZaB34oXcTk6TuEnYKuEIxpszFnldQa0ou+X05JatzQPVKgfWktAA2VDSXu+oPDCQhs0t0QgV4VnDe/qtjHpvZHs+5qVy8mfaem8sEAASa47RMdJhf3tudCB9qs5b3F9eIuIc3b1WZ8jIEN4MT2zQFZKizL1MzLlDq2JRCH0Y4Y8m7qzJNXjQIxk5N3qMQmp1RvFUKXzXElDJ6XwSOkH9jqxW4Cdxmx6vk2ok2zzRiJ9HhmPyrbOvqiqSLfGMyelR9kPEKYRITok=</wsse:BinarySecurityToken>
            <xenc:EncryptedKey Id="EK-8374AE8FD47309F5181713973770353151" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#">
                <xenc:EncryptionMethod Algorithm="http://www.w3.org/2001/04/xmlenc#rsa-oaep-mgf1p"/>
                <ds:KeyInfo xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
                    <wsse:SecurityTokenReference>
                        <wsse:Reference URI="#8374AE8FD47309F5181713973770353152" ValueType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-x509-token-profile-1.0#X509v3"/>
                    </wsse:SecurityTokenReference>
                </ds:KeyInfo>
                <xenc:CipherData>
                    <xenc:CipherValue>g3N9KJ/sPqWNcq7wmrrUW115iYcPCr6iu/opDSiV7Aky2JC/rV5vNGliRyW26PN+7EyLSrYJETwybP20yTZ7JsDf4uHqT47ieBgjewXXyapwiB300hTSKrgcX8VmuA/xnzvFPhpXqFd+Fa43cq9P7U44AjRcvtGxFkOBhfQlICjrkPVo8nijZ1yPLn91qvk6T5uSzAuvJZVkZc2JwDZ7q3N1+O916eL9mZYhx4mRApocAwF8o5xoHMlBotv+qJrUvfIk5Tr69QccKUVxGXt4p6kmXyD9YgbAf97lsQ1tondggIWbU1GOmaXdiCDfjq692W5vaSF9oJFHmFlMcvBqQw==</xenc:CipherValue>
                </xenc:CipherData>
                <xenc:ReferenceList>
                    <xenc:DataReference URI="#ED-8374AE8FD47309F5181713973770354153"/>
                    <xenc:DataReference URI="#ED-8374AE8FD47309F5181713973770355154"/>
                </xenc:ReferenceList>
            </xenc:EncryptedKey>
            <ds:Signature Id="SIG-8374AE8FD47309F5181713973770343150" xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
                <ds:SignedInfo>
                    <ds:CanonicalizationMethod Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                        <ec:InclusiveNamespaces PrefixList="dit req soapenv" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
                    </ds:CanonicalizationMethod>
                    <ds:SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/>
                    <ds:Reference URI="#TS-8374AE8FD47309F5181713973770337144">
                        <ds:Transforms>
                            <ds:Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                                <ec:InclusiveNamespaces PrefixList="wsse dit req soapenv" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
                            </ds:Transform>
                        </ds:Transforms>
                        <ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
                        <ds:DigestValue>6eX2/8FosEpbmBl2pwWrKXTfDYg=</ds:DigestValue>
                    </ds:Reference>
                    <ds:Reference URI="#UsernameToken-8374AE8FD47309F5181713973770337145">
                        <ds:Transforms>
                            <ds:Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                                <ec:InclusiveNamespaces PrefixList="dit req soapenv" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
                            </ds:Transform>
                        </ds:Transforms>
                        <ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
                        <ds:DigestValue>B1RGzemTjbJvYVcjL2Qf1Y7YO+Q=</ds:DigestValue>
                    </ds:Reference>
                    <ds:Reference URI="#id-8374AE8FD47309F5181713973770342149">
                        <ds:Transforms>
                            <ds:Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#">
                                <ec:InclusiveNamespaces PrefixList="dit req" xmlns:ec="http://www.w3.org/2001/10/xml-exc-c14n#"/>
                            </ds:Transform>
                        </ds:Transforms>
                        <ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
                        <ds:DigestValue>LoYo1wzQMjyJ/ZTVH6UQfSPYqkM=</ds:DigestValue>
                    </ds:Reference>
                </ds:SignedInfo>
                <ds:SignatureValue>FKaDLF99BfDmf5ipBsQ1Xm526AjNkTeEyxc1k5AQrXgVKrVbqOBVD0w4DxnqKcq1C+ZgmYkMZ/uDwle2qS9dTTmOk/ilUd4+nsEvhcid27+XQrGpSIpvf1o8k7szwn+6EPkvms8tTleK70Dz3xCvBYccWjkvx427BQQXOzqv4VkG40rTD6uRAqjdiiYKtFNPF9mQyf1mkOw2yTPGVCi40NDbigORZ4RpmIuk8BNp8aIb7krxdosFuS78p6vxsnit9n7TDLqOku3BzVTrMmQ6574XhWOGPhpSTnOaAPdUGMFdaXBQ7jNWLrQOBNGLAe5EOtX7w3X5Nsff4lSwI4GTBg==</ds:SignatureValue>
                <ds:KeyInfo Id="KI-8374AE8FD47309F5181713973770342147">
                    <wsse:SecurityTokenReference wsu:Id="STR-8374AE8FD47309F5181713973770342148">
                        <wsse:KeyIdentifier EncodingType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary" ValueType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-x509-token-profile-1.0#X509v3">MIIFmTCCBIGgAwIBAgITGgAQyUIzz6iIY1+eWQAAABDJQjANBgkqhkiG9w0BAQsFADBAMRMwEQYKCZImiZPyLGQBGRYDU0JJMRIwEAYKCZImiZPyLGQBGRYCQUQxFTATBgNVBAMTDFNCSS1QUk9ELVJDQTAeFw0yMzExMDQxNDI0MjJaFw0yNTExMDMxNDI0MjJaMGYxCzAJBgNVBAYTAklOMRQwEgYDVQQIEwtNYWhhcmFzaHRyYTEPMA0GA1UEBxMGTXVtYmFpMQwwCgYDVQQKEwNTQkkxDDAKBgNVBAsTA0VJUzEUMBIGA1UEAwwLRU5DX0VJU19VQVQwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDdkkvd/PDvCheiFiU66V5gHoGDZY/ilXqdnwmm/ER8B6OJofI5ZaXeZy7g2lGpda79KNLik31Y3SeYpPMc2JQ6qQdwNDNa8HcLSUrPu9guXOJzBu1+xRPNmB4eVvbI67iwNtglxrpICjIHLF2c5bLI5Q2zd06RgI2AY6xVmLM3kvhKJJdSL7lbunxWvrr5GnjQErH7U0kU/TuDswkJo1Uqlg7+R/wOAamSB8WrAtAI+a1b6hDOUriGUIAN9UGPquYswt5/a//rp+GCdp3H7zg9Lv9oJ8elqtqpS4S5WDcVcKfWgW8K+R4iczUGnkGp5vjvgdwGqqGbNVr+Bp8iBPr1AgMBAAGjggJkMIICYDAOBgNVHQ8BAf8EBAMCBaAwHQYDVR0lBBYwFAYIKwYBBQUHAwEGCCsGAQUFBwMCMCcGCSsGAQQBgjcVCgQaMBgwCgYIKwYBBQUHAwEwCgYIKwYBBQUHAwIwHQYDVR0OBBYEFIgHGLf4jUSLVn2yTXmyOLDcNTLdMB8GA1UdIwQYMBaAFDeaIHQwXiT9H+W/rv8A9GsVdZ+wMIHLBgNVHR8EgcMwgcAwgb2ggbqggbeGgbRsZGFwOi8vL0NOPVNCSS1QUk9ELVJDQSxDTj1TQklST09UQ0FQUk9ELENOPUNEUCxDTj1QdWJsaWMlMjBLZXklMjBTZXJ2aWNlcyxDTj1TZXJ2aWNlcyxDTj1Db25maWd1cmF0aW9uLERDPUFELERDPVNCST9jZXJ0aWZpY2F0ZVJldm9jYXRpb25MaXN0P2Jhc2U/b2JqZWN0Q2xhc3M9Y1JMRGlzdHJpYnV0aW9uUG9pbnQwgbkGCCsGAQUFBwEBBIGsMIGpMIGmBggrBgEFBQcwAoaBmWxkYXA6Ly8vQ049U0JJLVBST0QtUkNBLENOPUFJQSxDTj1QdWJsaWMlMjBLZXklMjBTZXJ2aWNlcyxDTj1TZXJ2aWNlcyxDTj1Db25maWd1cmF0aW9uLERDPUFELERDPVNCST9jQUNlcnRpZmljYXRlP2Jhc2U/b2JqZWN0Q2xhc3M9Y2VydGlmaWNhdGlvbkF1dGhvcml0eTA8BgkrBgEEAYI3FQcELzAtBiUrBgEEAYI3FQiGgZxcg8eAW4P1kTeE4IFms+pkaobo0A2Dge0JAgFkAgEVMA0GCSqGSIb3DQEBCwUAA4IBAQBbwhUAEQRVQy8mKVFE3WoohhU2dPQ0w/oHuq762lr2H48Qf1o0BtgX5OI/TikqoopZ3c/G5OBqEa1uTGUV9lCEbd9UxsTCPWueVaxy9H6yXgRIhlxaplz44iRAPmZwnxdWZusmK4FVKtFvO1GPNQ6wnGlvn7u5QVKvoCUwU/1rRuxlOYZpEwHh4ozvCgbl1P6+Wr4Lb0JcszHxSYtJgsZtLjUtyplhQn7389Ili/jZ1kENQCDuqsaDYNlVxyXKPBJXRu11wvu3+Sol9o3FqrWb96LgN7S02ZhwJlNYTU6FhR65L64vgPyHO4UXtivuigHNgG4nvVUNuHJMHYHDZx1j</wsse:KeyIdentifier>
                    </wsse:SecurityTokenReference>
                </ds:KeyInfo>
            </ds:Signature>
            <wsse:UsernameToken wsu:Id="UsernameToken-8374AE8FD47309F5181713973770337145">
                <xenc:EncryptedData Id="ED-8374AE8FD47309F5181713973770354153" Type="http://www.w3.org/2001/04/xmlenc#Content" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#">
                    <xenc:EncryptionMethod Algorithm="http://www.w3.org/2001/04/xmlenc#aes128-cbc"/>
                    <ds:KeyInfo xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
                        <wsse:SecurityTokenReference wsse11:TokenType="http://docs.oasis-open.org/wss/oasis-wss-soap-message-security-1.1#EncryptedKey" xmlns:wsse11="http://docs.oasis-open.org/wss/oasis-wss-wssecurity-secext-1.1.xsd">
                            <wsse:Reference URI="#EK-8374AE8FD47309F5181713973770353151"/>
                        </wsse:SecurityTokenReference>
                    </ds:KeyInfo>
                    <xenc:CipherData>
                        <xenc:CipherValue>6mIRjLJ8Hi857mtUQUx4NgLqzlewmkptugb1pYWWnemLev7I0iRe4pZwwz3SNFcxP/TWU2CxkNAxvUrJW728M9ao1ioLXDUYyTdOsXxEDv2ugFmOKGJZAeHUJATAMitd8dTSxT67YMxJjMmwwp1w0rsexUgqGRNu7LhtdaGrdbOkWvl/8FQji+UGPS8niFBlg6Vti3vpe22OjywlnWXJQEiO7Q9+hRdx/EYbc3JAXhmFsCUKV5gw1YrLyOB3Q29xXHphj3pzHK1zTYhYI0+OQQ==</xenc:CipherValue>
                    </xenc:CipherData>
                </xenc:EncryptedData>
            </wsse:UsernameToken>
            <wsu:Timestamp wsu:Id="TS-8374AE8FD47309F5181713973770337144">
                <wsu:Created>2024-04-24T15:49:30.336Z</wsu:Created>
                <wsu:Expires>2024-04-25T00:09:30.336Z</wsu:Expires>
            </wsu:Timestamp>
        </wsse:Security>
    </soapenv:Header>
    <soapenv:Body wsu:Id="id-8374AE8FD47309F5181713973770342149" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
        <xenc:EncryptedData Id="ED-8374AE8FD47309F5181713973770355154" Type="http://www.w3.org/2001/04/xmlenc#Content" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#">
            <xenc:EncryptionMethod Algorithm="http://www.w3.org/2001/04/xmlenc#aes128-cbc"/>
            <ds:KeyInfo xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
                <wsse:SecurityTokenReference wsse11:TokenType="http://docs.oasis-open.org/wss/oasis-wss-soap-message-security-1.1#EncryptedKey" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:wsse11="http://docs.oasis-open.org/wss/oasis-wss-wssecurity-secext-1.1.xsd">
                    <wsse:Reference URI="#EK-8374AE8FD47309F5181713973770353151"/>
                </wsse:SecurityTokenReference>
            </ds:KeyInfo>
            <xenc:CipherData>
                <xenc:CipherValue>BHP5iBgglEG/F4fr7o8lMW9l8Cc3Ks64BeaQ/GkRx37JW9OXwExv0hBvKRwA333zDzr7L7jimYI3bd/en+F1EqiAjUTrZpybVVcp6IIOJwL4Sgqu2FPdwvuzN/YIYbZ4uQHrJ72KHEWXyx5GsXMM7jKjUi+vLWG85QmCf2qSyGbY4HxOci7rT1VJcGJl+6O9aCgHj1cdSbYgqs9IFcswIwHRBWrsqmWJIauqcWbDyhssExNRj9BngcHq4aZZiOVrqxK+ZcGXaY3GjOyeprrUqpFJTRHjHytxkYnBFr+z1O7A2jRJTv2k9Kw/xPubroqAYj6EBbTz+36RY5FcTplIw2k5NqzjbXagjjc7n6rbGzWgX5Ev/el04GDMSYLzMMldZlBO9ckRhzywFe+S2l2W3CZ4WrqNqHDGLE935OdfHmmDWnVOLU8Wik3tmaOdo0F6HwIX4aG+h/G8H3XLfEoxC6HBvo9S6xhF/2f2FnRb0f7rDYZrgjgJV4mHa53oG4f2u0mOTw6vx4AGFmdoR/Sinf7slR0u/ZD/+kzUMMHCdT/m7jiwJ6MwnrOYLa58zGz/lyJqDfL+MinMpwzVWUjvXRWOEZqHvmxfgKh7OqmkyQlMOL/Ju/NULtNVUxBOC6WblwPHiPorDQPlWqwU4LbfgFstzwlB4s82Bpb6uYXHw2Rg0equvumb46pMngCZbXVmfXnwk3dbHxoEQ0OZMN8fe4+jOyNMFHQK1Yycg1qOEoCm/eYIbQbG1VVlwa6IIX4NZiXcXAnMvjgpaQSZu5/MC6jWixL6bdHPNCJJ2orJmC7r2cWeKxFCnGSCHA4Q0SP+zdMYd1/WF43m86BIMuB2XwgOm0bArwihjd+sZVTYU0nGKCTbM3n4dsvYeZUBYNcnAd84+hRtHjRTTnPdlHb5+jHLPvHLOoP5IFUadkdDe5vz3hupDMBIU0mHfAEFNz/8</xenc:CipherValue>
            </xenc:CipherData>
        </xenc:EncryptedData>
    </soapenv:Body>
</soapenv:Envelope>


Firstly opening tag of Envelope inside it:
	we have header tag opening:
		Security with its attributes
			inside it we have BinarySecurityToken with value "MIICyzCCAbOgAwIBAgIEEElUbzANBgkqhkiG9w0BAQUFADAWMRQwEgYDVQQDEwtJbmZvc3lzIEx0ZDAeFw0yMjA5MjIwNDM4MzJaFw0yNDA1MTQwNDM4MzJaMBYxFDASBgNVBAMTC0luZm9zeXMgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhfamuA3VA3M+7TrbcAkQgpe2jZZJNjy6QFGy3HfUB9RZUtwb8awvMa5HTrQ/3/U/XRZs8Kg+i9wuhW7aoHnhv7qF2coyz2ZHOqezrcHzWA8ZLuGNB5W71TdqRw6SklPixHtyM5lH7tJhtaI3HTOUQqYbyNI1+Z/NcEXA938iJcRRhzhb8ypLxe3iZcO0280p0sR73RpLq/LhTKDm05zaTzh0oFHqQ3kb9KJZVgWCeKxrTcnb+1RUKtivPmsLXdm4sOsYhJAzbj7NbltC7GdZaE0WfqNfvNH0VMJXHYganyYVnMHB9cgwDdP2B/n6piXNCY8FrLi1A97EXUxBHEP6KQIDAQABoyEwHzAdBgNVHQ4EFgQU1Q0s/iuIoZVh6sOIGEWDTQDn55swDQYJKoZIhvcNAQEFBQADggEBAER+9dTj6piRWFj3L1cHavW8vFFTvhuOwjr0SGHgBmzw+qyIYFOnCXyhJehtvWWk1Nsza1eNPrlMZaB34oXcTk6TuEnYKuEIxpszFnldQa0ou+X05JatzQPVKgfWktAA2VDSXu+oPDCQhs0t0QgV4VnDe/qtjHpvZHs+5qVy8mfaem8sEAASa47RMdJhf3tudCB9qs5b3F9eIuIc3b1WZ8jIEN4MT2zQFZKizL1MzLlDq2JRCH0Y4Y8m7qzJNXjQIxk5N3qMQmp1RvFUKXzXElDJ6XwSOkH9jqxW4Cdxmx6vk2ok2zzRiJ9HhmPyrbOvqiqSLfGMyelR9kPEKYRITok="
			Now we have EncryptedKey with its attributes, 
				inside it EncryptionMethod tag opening along with Algorithm value ending with rsa-oaep-mgf1p which specifies logic to encrypt the key used for encryption!!!!!!!!!!,
					inside it keyinfo,
						again inside keyinfo, we have SecurityTokenReference and its attributes
					we have cipher data inside EncryptedKey tag, where inside this we have cipher data with the cipher value of encrypted value of key with applied logic rsa-oaep-mgf1p.
					we have reference list of 2 data references with uri to be later used in same xml response
			Now we have Signature tag with ds attribute value ending with digisign indicating digital signature,
				inside Signature we have SignedInfo,
					we have CanonicalizationMethod with its attributes,SignatureMethod with Algorithm value ending with rsa-sha1 which specifies the logic applied to generate digital signature.
				inside Signature we have 3 Reference tags,
					where first reference tag contains uri with starting TS which means timestamp,inside we have transfomrs tag with its related attributes and after it we have digest method with attribute Algorithm ending with sha1 which indicates normal java logic of sha1 and then we have digestvalue tag with value as result of logic(sha1) applied on current time stamp.
					where first reference tag contains uri with starting UsernameToken which means username concat with token,inside we have transfomrs tag with its related attributes and after it we have digest method with attribute Algorithm ending with sha1 which indicates normal java logic of sha1 and then we have digestvalue tag with value as result of logic(sha1) applied on username+token.
					where first reference tag contains uri with starting id which means id,inside we have transfomrs tag with its related attributes and after it we have digest method with attribute Algorithm ending with sha1 which indicates normal java logic of sha1 and then we have digestvalue tag with value as result of logic(sha1) applied on id.
				inside Signature tag we have now SignatureValue,



<?xml version="1.0" encoding="UTF-8"?>

<project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd">
  <modelVersion>4.0.0</modelVersion>
  <groupId>com.example</groupId>
  <artifactId>rest-service</artifactId>
  <version>0.0.1-SNAPSHOT</version>

  <name>rest-service</name>
  <!-- FIXME change it to the project's website -->
  <url>http://www.example.com</url>

  <properties>
    <project.build.sourceEncoding>UTF-8</project.build.sourceEncoding>
    <maven.compiler.source>1.7</maven.compiler.source>
    <maven.compiler.target>1.7</maven.compiler.target>
  </properties>

  <dependencies>
    <!-- Add Bouncy Castle for encryption and decryption -->
    <dependency>
      <groupId>org.bouncycastle</groupId>
      <artifactId>bcprov-jdk15on</artifactId>
      <version>1.68</version> <!-- Use the latest version available -->
    </dependency>
    <dependency>
        <groupId>org.apache.wss4j</groupId>
        <artifactId>wss4j-ws-security-dom</artifactId>
        <version>2.3.0</version>
    </dependency>
    <dependency>
        <groupId>org.apache.wss4j</groupId>
        <artifactId>wss4j-bindings</artifactId>
        <version>2.3.0</version>
    </dependency>
   

  </dependencies>

  <build>
    <pluginManagement><!-- lock down plugins versions to avoid using Maven defaults (may be moved to parent pom) -->
      <plugins>
        <!-- clean lifecycle, see https://maven.apache.org/ref/current/maven-core/lifecycles.html#clean_Lifecycle -->
        <plugin>
          <artifactId>maven-clean-plugin</artifactId>
          <version>3.1.0</version>
        </plugin>
        <!-- default lifecycle, jar packaging: see https://maven.apache.org/ref/current/maven-core/default-bindings.html#Plugin_bindings_for_jar_packaging -->
        <plugin>
          <artifactId>maven-resources-plugin</artifactId>
          <version>3.0.2</version>
        </plugin>
        <plugin>
          <artifactId>maven-compiler-plugin</artifactId>
          <version>3.8.0</version>
        </plugin>
        <plugin>
          <artifactId>maven-surefire-plugin</artifactId>
          <version>2.22.1</version>
        </plugin>
        <plugin>
          <artifactId>maven-jar-plugin</artifactId>
          <version>3.0.2</version>
        </plugin>
        <plugin>
          <artifactId>maven-install-plugin</artifactId>
          <version>2.5.2</version>
        </plugin>
        <plugin>
          <artifactId>maven-deploy-plugin</artifactId>
          <version>2.8.2</version>
        </plugin>
        <!-- site lifecycle, see https://maven.apache.org/ref/current/maven-core/lifecycles.html#site_Lifecycle -->
        <plugin>
          <artifactId>maven-site-plugin</artifactId>
          <version>3.7.1</version>
        </plugin>
        <plugin>
          <artifactId>maven-project-info-reports-plugin</artifactId>
          <version>3.0.0</version>
        </plugin>
      </plugins>
    </pluginManagement>
  </build>
</project>

					
