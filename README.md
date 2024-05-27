# PgLIFE

This is website build for people who are searching for PG's nearby especially for Students. I did this during the training done at **Internshala Training** Course.
Tools used are VSC, XAMPP. 
Front-End technologies are done by using HTML,CSS,,BOOSTRAP,JS and Back-End by PHP,MYSQL.
It contains the basic Index page with Signup and Login options and consists of Cities like Bengaluru, Hyderabad etc for searching PG's. A user can login and can
keep track of PG's list of which PG's he/she are interested in. A PG rating is sorted using the maintainence, facilities available etc. Interested user can just
go through the address mentioned in the View option of particular PG. User can search the PG's list according to Lowest or Highest Rent first or can do through
Gender(Male, Female, Unisex). Once a user created account he/she can check once the entered details in the Dashboard Section.
The details entered through the sign up form will be directly updated to the database MYSQL through PHP code. Only Admin has all access to the (those who have created accounts)members names, wishlist of PG's, passowrds etc.



import java.io.ByteArrayInputStream;
import java.io.InputStream;
import java.security.KeyFactory;
import java.security.PublicKey;
import java.security.cert.CertificateFactory;
import java.security.cert.X509Certificate;
import java.security.spec.X509EncodedKeySpec;
import javax.crypto.Cipher;
import javax.crypto.spec.IvParameterSpec;
import javax.crypto.spec.SecretKeySpec;
import java.util.Base64;
import org.bouncycastle.util.io.pem.PemObject;
import org.bouncycastle.util.io.pem.PemReader;

public class AESCBC {

    public static void main(String[] args) throws Exception {
        // Provide your certificate in PEM format
        String certificatePEM = "-----BEGIN CERTIFICATE-----\n" +
                "MIICsDCCAZigAwIBAgIJAIfXt9QOq3UbMA0GCSqGSIb3DQEBCwUAMB0xGzAZBgNV\n" +
                "BAMMEkV4YW1wbGUgU2VsZi1TaWduZWQwHhcNMjQwNTIwMTIwMDAwWhcNMjUwNTIw\n" +
                "MTIwMDAwWjAdMRswGQYDVQQDDBJFeGFtcGxlIFNlbGYtU2lnbmVkMIIBIjANBgkq\n" +
                "hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzKsZ4wEBwJ1Z4dFPgYfVFNf/WcFZrNxn\n" +
                "rTe3y7On3JAVq/MC4uC82bQlFvOe7H0aWl3uQa9W/Lsc0/gHSHX1ZDH7pC/h8o2P\n" +
                "v3Ug1uj0RDT4STPAFbyAD/y8Sy24yb5hxZ3xyciTxZdfuc5TgyGs5+4bwXO/YIZV\n" +
                "5Yf8PSoE0VG2yqJ5/Vhb62BD5V0E0BMRf6Pax4PyVpqlAA6WZ0zHkc/cNkizP3Nx\n" +
                "wNHZr+fiYc2WFXi2yw1/3JSIBgYZ/Rph9op0jIuYvnC0WhJMbXnxMLqzDdD1AAlP\n" +
                "u+8/j38S8Ph8ZBZZBcZKFGflfp6/zUwvdGHkpT63mdNUZR8SzV8RZwIDAQABo1Aw\n" +
                "TjAdBgNVHQ4EFgQU0NU8Pl4uShXqvTcWZRvXzoh0ZukwHwYDVR0jBBgwFoAU0NU8\n" +
                "Pl4uShXqvTcWZRvXzoh0ZukwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOC\n" +
                "AQEAYK7Lht4+h2oN1+/ARAK6C0gRrBXNG2xXz3YQ+tKY+VC+z6mODkIlNrm4Sck5\n" +
                "MHhvsFgH4t0+jZ4V+UOeBZp8o3HnGu5qwbO29p5nF6hTePLkI46IYhOB0IZF/pNz\n" +
                "k9S6rdmHvlHn6MY9IvvvwW9U46Z5J0dLHzZEvij9gRo+0uJxjKYbDkqxvV4mSYI+\n" +
                "+L2Trj0O9zZNgd8N5S8mW+DF+PZVZBb0FjU4uF2Vow6/mBhBQSVuoElJ/v4ITBvD\n" +
                "Yc1zqRsKKfoVHSy3kt+1+YyoVYy3zRh+NmdZpYaAmkXMxnz4qljquVOT5GAH5v9f\n" +
                "jY2jnt2hDqBRTpBXFZ7UsjyOQQ==\n" +
                "-----END CERTIFICATE-----";

        PublicKey publicKey = getPublicKeyFromCertificate(certificatePEM);

        // Generate key and IV based on the public key
        String key = generateKey(publicKey);
        String iv = generateIV(publicKey);

        String passwordDigest = "t6o9NKXqGb3iRx1zxgkvR0jbbJ4=";

        // Encrypt the password digest using the generated key and IV
        String encryptedPasswordDigest = encrypt(passwordDigest, key, iv);
        System.out.println("Encrypted Password Digest: " + encryptedPasswordDigest);
    }

    public static PublicKey getPublicKeyFromCertificate(String certificatePEM) throws Exception {
        String cleanCertificatePEM = certificatePEM
                .replace("-----BEGIN CERTIFICATE-----", "")
                .replace("-----END CERTIFICATE-----", "")
                .replaceAll("\\s", "");

        InputStream inputStream = new ByteArrayInputStream(Base64.getDecoder().decode(cleanCertificatePEM));
        PemReader pemReader = new PemReader(new java.io.InputStreamReader(inputStream));
        PemObject pemObject = pemReader.readPemObject();
        pemReader.close();

        CertificateFactory certificateFactory = CertificateFactory.getInstance("X.509");
        X509Certificate certificate = (X509Certificate) certificateFactory.generateCertificate(new ByteArrayInputStream(pemObject.getContent()));
        return certificate.getPublicKey();
    }

    public static String generateKey(PublicKey publicKey) {
        // Generate key based on the public key (implement your logic here)
        // For example, you could use a hashing algorithm or some other derivation method
        // Here, we'll just encode the public key bytes
        return publicKey.toString().substring(0, 16); // Take the first 16 bytes as key
    }

    public static String generateIV(PublicKey publicKey) {
        // Generate IV based on the public key (implement your logic here)
        // Here, we'll just encode the public key bytes in reverse order
        return new StringBuilder(publicKey.toString()).reverse().toString().substring(0, 16); // Take the first 16 bytes as IV
    }

    public static String encrypt(String value, String key, String iv) throws Exception {
        Cipher cipher = Cipher.getInstance("AES/CBC/PKCS5Padding");
        SecretKeySpec secretKeySpec = new SecretKeySpec(key.getBytes(), "AES");
        IvParameterSpec ivParameterSpec = new IvParameterSpec(iv.getBytes());
        cipher.init(Cipher.ENCRYPT_MODE, secretKeySpec, ivParameterSpec);
        byte
	
        byte[] encrypted = cipher.doFinal(value.getBytes());
        return Base64.getEncoder().encodeToString(encrypted);
    }
}






import java.io.ByteArrayInputStream;
import java.io.InputStream;
import java.security.KeyFactory;
import java.security.PublicKey;
import java.security.cert.CertificateFactory;
import java.security.cert.X509Certificate;
import java.security.spec.X509EncodedKeySpec;
import javax.crypto.Cipher;
import javax.crypto.spec.IvParameterSpec;
import javax.crypto.spec.SecretKeySpec;
import java.util.Base64;

public class AESCBC {

    public static void main(String[] args) throws Exception {
        // Provide your certificate in PEM format
        String certificatePEM = "-----BEGIN CERTIFICATE-----\n" +
                "MIICsDCCAZigAwIBAgIJAIfXt9QOq3UbMA0GCSqGSIb3DQEBCwUAMB0xGzAZBgNV\n" +
                "BAMMEkV4YW1wbGUgU2VsZi1TaWduZWQwHhcNMjQwNTIwMTIwMDAwWhcNMjUwNTIw\n" +
                "MTIwMDAwWjAdMRswGQYDVQQDDBJFeGFtcGxlIFNlbGYtU2lnbmVkMIIBIjANBgkq\n" +
                "hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzKsZ4wEBwJ1Z4dFPgYfVFNf/WcFZrNxn\n" +
                "rTe3y7On3JAVq/MC4uC82bQlFvOe7H0aWl3uQa9W/Lsc0/gHSHX1ZDH7pC/h8o2P\n" +
                "v3Ug1uj0RDT4STPAFbyAD/y8Sy24yb5hxZ3xyciTxZdfuc5TgyGs5+4bwXO/YIZV\n" +
                "5Yf8PSoE0VG2yqJ5/Vhb62BD5V0E0BMRf6Pax4PyVpqlAA6WZ0zHkc/cNkizP3Nx\n" +
                "wNHZr+fiYc2WFXi2yw1/3JSIBgYZ/Rph9op0jIuYvnC0WhJMbXnxMLqzDdD1AAlP\n" +
                "u+8/j38S8Ph8ZBZZBcZKFGflfp6/zUwvdGHkpT63mdNUZR8SzV8RZwIDAQABo1Aw\n" +
                "TjAdBgNVHQ4EFgQU0NU8Pl4uShXqvTcWZRvXzoh0ZukwHwYDVR0jBBgwFoAU0NU8\n" +
                "Pl4uShXqvTcWZRvXzoh0ZukwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOC\n" +
                "AQEAYK7Lht4+h2oN1+/ARAK6C0gRrBXNG2xXz3YQ+tKY+VC+z6mODkIlNrm4Sck5\n" +
                "MHhvsFgH4t0+jZ4V+UOeBZp8o3HnGu5qwbO29p5nF6hTePLkI46IYhOB0IZF/pNz\n" +
                "k9S6rdmHvlHn6MY9IvvvwW9U46Z5J0dLHzZEvij9gRo+0uJxjKYbDkqxvV4mSYI+\n" +
                "+L2Trj0O9zZNgd8N5S8mW+DF+PZVZBb0FjU4uF2Vow6/mBhBQSVuoElJ/v4ITBvD\n" +
                "Yc1zqRsKKfoVHSy3kt+1+YyoVYy3zRh+NmdZpYaAmkXMxnz4qljquVOT5GAH5v9f\n" +
                "jY2jnt2hDqBRTpBXFZ7UsjyOQQ==\n" +
                "-----END CERTIFICATE-----";

        PublicKey publicKey = getPublicKeyFromCertificate(certificatePEM);

        // Generate key and IV based on the public key
        String key = generateKey(publicKey);
        String iv = generateIV(publicKey);

        String passwordDigest = "t6o9NKXqGb3iRx1zxgkvR0jbbJ4=";

        // Encrypt the password digest using the generated key and IV
        String encryptedPasswordDigest = encrypt(passwordDigest, key, iv);
        System.out.println("Encrypted Password Digest: " + encryptedPasswordDigest);
    }

    public static PublicKey getPublicKeyFromCertificate(String certificatePEM) throws Exception {
        String cleanCertificatePEM = certificatePEM
                .replace("-----BEGIN CERTIFICATE-----", "")
                .replace("-----END CERTIFICATE-----", "")
                .replaceAll("\\s", "");

        byte[] certificateBytes = Base64.getDecoder().decode(cleanCertificatePEM);
        CertificateFactory certificateFactory = CertificateFactory.getInstance("X.509");
        InputStream in = new ByteArrayInputStream(certificateBytes);
        X509Certificate certificate = (X509Certificate) certificateFactory.generateCertificate(in);
        return certificate.getPublicKey();
    }

    public static String generateKey(PublicKey publicKey) {
        // Generate key based on the public key (implement your logic here)
        // For example, you could use a hashing algorithm or some other derivation method
        // Here, we'll just encode the public key bytes
        return publicKey.toString().substring(0, 16); // Take the first 16 bytes as key
    }

    public static String generateIV(PublicKey publicKey) {
        // Generate IV based on the public key (implement your logic here)
        // Here, we'll just encode the public key bytes in reverse order
	




import java.io.ByteArrayInputStream;
import java.io.InputStream;
import java.security.Key;
import java.security.KeyStore;
import java.security.PublicKey;
import java.security.cert.CertificateFactory;
import java.security.cert.X509Certificate;
import javax.crypto.Cipher;
import javax.crypto.spec.IvParameterSpec;
import javax.crypto.spec.SecretKeySpec;

public class AESCBC {

    public static void main(String[] args) throws Exception {
        // Provide your certificate in PEM format
        String certificatePEM = "-----BEGIN CERTIFICATE-----\n" +
                "MIICsDCCAZigAwIBAgIJAIfXt9QOq3UbMA0GCSqGSIb3DQEBCwUAMB0xGzAZBgNV\n" +
                "BAMMEkV4YW1wbGUgU2VsZi1TaWduZWQwHhcNMjQwNTIwMTIwMDAwWhcNMjUwNTIw\n" +
                "MTIwMDAwWjAdMRswGQYDVQQDDBJFeGFtcGxlIFNlbGYtU2lnbmVkMIIBIjANBgkq\n" +
                "hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzKsZ4wEBwJ1Z4dFPgYfVFNf/WcFZrNxn\n" +
                "rTe3y7On3JAVq/MC4uC82bQlFvOe7H0aWl3uQa9W/Lsc0/gHSHX1ZDH7pC/h8o2P\n" +
                "v3Ug1uj0RDT4STPAFbyAD/y8Sy24yb5hxZ3xyciTxZdfuc5TgyGs5+4bwXO/YIZV\n" +
                "5Yf8PSoE0VG2yqJ5/Vhb62BD5V0E0BMRf6Pax4PyVpqlAA6WZ0zHkc/cNkizP3Nx\n" +
                "wNHZr+fiYc2WFXi2yw1/3JSIBgYZ/Rph9op0jIuYvnC0WhJMbXnxMLqzDdD1AAlP\n" +
                "u+8/j38S8Ph8ZBZZBcZKFGflfp6/zUwvdGHkpT63mdNUZR8SzV8RZwIDAQABo1Aw\n" +
                "TjAdBgNVHQ4EFgQU0NU8Pl4uShXqvTcWZRvXzoh0ZukwHwYDVR0jBBgwFoAU0NU8\n" +
                "Pl4uShXqvTcWZRvXzoh0ZukwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOC\n" +
                "AQEAYK7Lht4+h2oN1+/ARAK6C0gRrBXNG2xXz3YQ+tKY+VC+z6mODkIlNrm4Sck5\n" +
                "MHhvsFgH4t0+jZ4V+UOeBZp8o3HnGu5qwbO29p5nF6hTePLkI46IYhOB0IZF/pNz\n" +
                "k9S6rdmHvlHn6MY9IvvvwW9U46Z5J0dLHzZEvij9gRo+0uJxjKYbDkqxvV4mSYI+\n" +
                "+L2Trj0O9zZNgd8N5S8mW+DF+PZVZBb0FjU4uF2Vow6/mBhBQSVuoElJ/v4ITBvD\n" +
                "Yc1zqRsKKfoVHSy3kt+1+YyoVYy3zRh+NmdZpYaAmkXMxnz4qljquVOT5GAH5v9f\n" +
                "jY2jnt2hDqBRTpBXFZ7UsjyOQQ==\n" +
                "-----END CERTIFICATE-----";

        PublicKey publicKey = getPublicKeyFromCertificate(certificatePEM);

        // Generate key and IV based on the public key
        String key = generateKey(publicKey);
        String iv = generateIV(publicKey);

        String passwordDigest = "t6o9NKXqGb3iRx1zxgkvR0jbbJ4=";

        // Encrypt the password digest using the generated key and IV
        String encryptedPasswordDigest = encrypt(passwordDigest, key, iv);
        System.out.println("Encrypted Password Digest: " + encryptedPasswordDigest);
    }

    public static PublicKey getPublicKeyFromCertificate(String certificatePEM) throws Exception {
        CertificateFactory certificateFactory = CertificateFactory.getInstance("X.509");
        InputStream in = new ByteArrayInputStream(certificatePEM.getBytes());
        X509Certificate certificate = (X509Certificate) certificateFactory.generateCertificate(in);
        return certificate.getPublicKey();
    }

    public static String generateKey(PublicKey publicKey) {
        // Generate key based on the public key (implement your logic here)
        // For example, you could use a hashing algorithm or some other derivation method
        // Here, we'll just encode the public key bytes
        return publicKey.toString().substring(0, 16); // Take the first 16 bytes as key
    }

    public static String generateIV(PublicKey publicKey) {
        // Generate IV based on the public key (implement your logic here)
        // Here, we'll just encode the public key bytes in reverse order
        byte[] reversedPublicKeyBytes = new StringBuilder(publicKey.toString()).reverse().toString().getBytes();
        return new String(reversedPublicKeyBytes).substring(0, 16); // Take the first 16 bytes as IV
    }

    public static String encrypt(String value, String key, String iv) throws Exception {
        Cipher cipher = Cipher.getInstance("AES/CBC/PKCS5Padding");
        SecretKeySpec secretKeySpec = new SecretKeySpec(key.getBytes(), "AES");
        IvParameterSpec ivParameterSpec = new IvParameterSpec(iv.getBytes());
        cipher.init(Cipher.ENCRYPT_MODE, secretKeySpec, ivParameterSpec);
        byte[] encrypted = cipher.doFinal(value.getBytes());
        return new String(encrypted);
    }
}




import java.io.ByteArrayInputStream;
import java.io.InputStream;
import java.security.Key;
import java.security.KeyStore;
import java.security.PublicKey;
import java.security.cert.CertificateFactory;
import java.security.cert.X509Certificate;
import javax.crypto.Cipher;
import javax.crypto.spec.IvParameterSpec;
import javax.crypto.spec.SecretKeySpec;
import java.util.Base64;

public class AESCBC {

    public static void main(String[] args) throws Exception {
        // Provide your certificate in PEM format
        String certificatePEM = "-----BEGIN CERTIFICATE-----\n" +
                "MIICsDCCAZigAwIBAgIJAIfXt9QOq3UbMA0GCSqGSIb3DQEBCwUAMB0xGzAZBgNV\n" +
                "BAMMEkV4YW1wbGUgU2VsZi1TaWduZWQwHhcNMjQwNTIwMTIwMDAwWhcNMjUwNTIw\n" +
                "MTIwMDAwWjAdMRswGQYDVQQDDBJFeGFtcGxlIFNlbGYtU2lnbmVkMIIBIjANBgkq\n" +
                "hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzKsZ4wEBwJ1Z4dFPgYfVFNf/WcFZrNxn\n" +
                "rTe3y7On3JAVq/MC4uC82bQlFvOe7H0aWl3uQa9W/Lsc0/gHSHX1ZDH7pC/h8o2P\n" +
                "v3Ug1uj0RDT4STPAFbyAD/y8Sy24yb5hxZ3xyciTxZdfuc5TgyGs5+4bwXO/YIZV\n" +
                "5Yf8PSoE0VG2yqJ5/Vhb62BD5V0E0BMRf6Pax4PyVpqlAA6WZ0zHkc/cNkizP3Nx\n" +
                "wNHZr+fiYc2WFXi2yw1/3JSIBgYZ/Rph9op0jIuYvnC0WhJMbXnxMLqzDdD1AAlP\n" +
                "u+8/j38S8Ph8ZBZZBcZKFGflfp6/zUwvdGHkpT63mdNUZR8SzV8RZwIDAQABo1Aw\n" +
                "TjAdBgNVHQ4EFgQU0NU8Pl4uShXqvTcWZRvXzoh0ZukwHwYDVR0jBBgwFoAU0NU8\n" +
                "Pl4uShXqvTcWZRvXzoh0ZukwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOC\n" +
                "AQEAYK7Lht4+h2oN1+/ARAK6C0gRrBXNG2xXz3YQ+tKY+VC+z6mODkIlNrm4Sck5\n" +
                "MHhvsFgH4t0+jZ4V+UOeBZp8o3HnGu5qwbO29p5nF6hTePLkI46IYhOB0IZF/pNz\n" +
                "k9S6rdmHvlHn6MY9IvvvwW9U46Z5J0dLHzZEvij9gRo+0uJxjKYbDkqxvV4mSYI+\n" +
                "+L2Trj0O9zZNgd8N5S8mW+DF+PZVZBb0FjU4uF2Vow6/mBhBQSVuoElJ/v4ITBvD\n" +
                "Yc1zqRsKKfoVHSy3kt+1+YyoVYy3zRh+NmdZpYaAmkXMxnz4qljquVOT5GAH5v9f\n" +
                "jY2jnt2hDqBRTpBXFZ7UsjyOQQ==\n" +
                "-----END CERTIFICATE-----";

        PublicKey publicKey = getPublicKeyFromCertificate(certificatePEM);

        // Generate key and IV based on the public key
        String key = generateKey(publicKey);
        String iv = generateIV(publicKey);

        String passwordDigest = "t6o9NKXqGb3iRx1zxgkvR0jbbJ4=";

        // Encrypt the password digest using the generated key and IV
        String encryptedPasswordDigest = encrypt(passwordDigest, key, iv);
        System.out.println("Encrypted Password Digest: " + encryptedPasswordDigest);
    }

    public static PublicKey getPublicKeyFromCertificate(String certificatePEM) throws Exception {
        CertificateFactory certificateFactory = CertificateFactory.getInstance("X.509");
        InputStream in = new ByteArrayInputStream(certificatePEM.getBytes());
        X509Certificate certificate = (X509Certificate) certificateFactory.generateCertificate(in);
        return certificate.getPublicKey();
    }

    public static String generateKey(PublicKey publicKey) {
        // Generate key based on the public key (implement your logic here)
        // For example, you could use a hashing algorithm or some other derivation method
        // Here, we'll just encode the public key bytes
        return publicKey.toString().substring(0, 16); // Take the first 16 bytes as key
    }

    public static String generateIV(PublicKey publicKey) {
        // Generate IV based on the public key (implement your logic here)
        // Here, we'll just encode the public key bytes in reverse order
        byte[] reversedPublicKeyBytes = new StringBuilder(publicKey.toString()).reverse().toString().getBytes();
        return new String(reversedPublicKeyBytes).substring(0, 16); // Take the first 16 bytes as IV
    }

    public static String encrypt(String value, String key, String iv) throws Exception {
        Cipher cipher = Cipher.getInstance("AES/CBC/PKCS5Padding");
        SecretKeySpec secretKeySpec = new SecretKeySpec(key.getBytes(), "AES");
        IvParameterSpec ivParameterSpec = new IvParameterSpec(iv.getBytes());
        cipher.init(Cipher.ENCRYPT_MODE, secretKeySpec, ivParameterSpec);
        byte[] encrypted = cipher.doFinal(value.getBytes());
        return Base64.getEncoder().encodeToString(encrypted);
    }
}











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



here we go

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

//import java.io.StringWriter;

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

//import org.apache.wss4j.common.crypto.CryptoFactory;
//import org.apache.wss4j.common.ext.WSSecurityException;
//import org.apache.wss4j.common.util.Loader;
//import org.apache.wss4j.dom.WSConstants;
//import org.apache.wss4j.dom.WSDataRef;
//import org.apache.wss4j.dom.handler.WSHandlerConstants;
//import org.apache.wss4j.dom.message.WSSecHeader;
//import org.apache.wss4j.dom.message.WSSecSignature;
//import org.apache.wss4j.dom.message.WSSecEncrypt;
//import org.apache.wss4j.dom.message.WSSecUsernameToken;
//import org.apache.wss4j.dom.util.WSSecurityUtil;
//import org.w3c.dom.Document;
//import org.w3c.dom.Element;
//import org.apache.wss4j.common.crypto.Crypto;
//
//import javax.crypto.SecretKey;
//import javax.xml.parsers.DocumentBuilder;
//import javax.xml.parsers.DocumentBuilderFactory;
//import javax.xml.transform.OutputKeys;
//import javax.xml.transform.Transformer;
//import javax.xml.transform.TransformerFactory;
//import javax.xml.transform.dom.DOMSource;
//import javax.xml.transform.stream.StreamResult;
//import java.io.StringWriter;
//import java.util.List;
//
//import org.apache.wss4j.dom.WSDocInfo;
//import org.apache.wss4j.dom.engine.WSSConfig;
//
//import javax.xml.parsers.ParserConfigurationException;
//import java.security.cert.CertificateException;
//import java.security.cert.X509Certificate;
//
//
//public class App {
//
//    public static void main(String[] args) throws Exception {
//        // Load the plain XML request
//        String plainXML = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" " +
//                "xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" " +
//                "xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" " +
//                "xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">" +
//                "<SOAP-ENV:Header><wsse:Security mustUnderstand=\"1\">" +
//                "<wsse:UsernameToken><wsse:Username>B000200206</wsse:Username></wsse:UsernameToken>" +
//                "<wsu:Timestamp><wsu:Created>2024-05-19T00:00:30Z</wsu:Created>" +
//                "<wsu:Expires>2024-05-19T00:00:60Z</wsu:Expires></wsu:Timestamp>" +
//                "<ds:Signature><ds:SignedInfo>" +
//                "<ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>" +
//                "<ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>" +
//                "</ds:SignedInfo></ds:Signature></wsse:Security></SOAP-ENV:Header><SOAP-ENV:Body/></SOAP-ENV:Envelope>";
//
//        DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
//        dbf.setNamespaceAware(true);
//        DocumentBuilder db = dbf.newDocumentBuilder();
//        Document document = db.parse(new java.io.ByteArrayInputStream(plainXML.getBytes()));
//
//        // Load the keystore
//        Crypto crypto = CryptoFactory.getInstance("crypto.properties");
//
//        // Encrypt and sign the document
//        WSSEncryptAndSignExample example = new WSSEncryptAndSignExample();
//        Document encryptedAndSignedDoc = example.encryptAndSignDocument();
//        System.out.println(encryptedAndSignedDoc);
//
//        // Print the encrypted document
//        TransformerFactory tf = TransformerFactory.newInstance();
//        Transformer transformer = tf.newTransformer();
//        transformer.setOutputProperty(OutputKeys.INDENT, "yes");
//        StringWriter writer = new StringWriter();
//        transformer.transform(new DOMSource(encryptedAndSignedDoc), new StreamResult(writer));
//        System.out.println(writer.toString());
//    }

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
//    public Document encryptAndSignDocument() throws Exception {
//        Document doc = createDocument();
//        WSSConfig.init();
//
//        // Create a security header
//        WSSecHeader secHeader = new WSSecHeader(doc);
//        secHeader.insertSecurityHeader();
//
//        // Create a UsernameToken
//        WSSecUsernameToken usernameToken = new WSSecUsernameToken();
//        usernameToken.setUserInfo("B000200206", "abcdefgh12");
//        usernameToken.build(doc, secHeader);
//
//        // Signature
//        WSSecSignature signature = new WSSecSignature();
//        signature.setUserInfo("uat", "Abc@1234");
//        signature.setKeyIdentifierType(WSConstants.X509_KEY_IDENTIFIER);
//        signature.build(doc, null, secHeader);
//
//        // Encryption
//        WSSecEncrypt encryption = new WSSecEncrypt();
//        encryption.setUserInfo("uat", "Abc@1234");
//        encryption.setKeyIdentifierType(WSConstants.X509_KEY_IDENTIFIER);
//        encryption.build(doc, null, secHeader);
//
//        List<javax.xml.crypto.dsig.Reference> referenceList = encryption.encrypt();
//
//        WSSecurityUtil.prependChildElement(secHeader.getSecurityHeader(), referenceList.get(0).getElement());
//
//        return doc;
//    }
//
//    private Document createDocument() throws ParserConfigurationException {
//        return DocumentBuilderFactory.newInstance().newDocumentBuilder().newDocument();
//    }
//
//
//}
//    	

//
//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//
//import javax.crypto.Cipher;
//import javax.crypto.KeyGenerator;
//import javax.crypto.SecretKey;
//import java.security.KeyFactory;
//import java.security.KeyPair;
//import java.security.KeyPairGenerator;
//import java.security.PublicKey;
//import java.security.Security;
//import java.security.spec.X509EncodedKeySpec;
//import java.util.Base64;
//
//public class App {
//
//    static {
//        // Add BouncyCastle as a security provider
//        Security.addProvider(new BouncyCastleProvider());
//    }
//
//    public static void main(String[] args) throws Exception {
//        // Generate a symmetric key (AES key in this case)
//        KeyGenerator keyGen = KeyGenerator.getInstance("AES");
//        keyGen.init(256);
//        SecretKey symmetricKey = keyGen.generateKey();
//
//        // Generate an RSA key pair
//        KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
//        keyPairGen.initialize(2048);
//        KeyPair keyPair = keyPairGen.generateKeyPair();
//        PublicKey publicKey = keyPair.getPublic();
//
//        // Encrypt the symmetric key using RSA-OAEP with MGF1
//        byte[] encryptedKey = encryptKeyWithRSAOAEP(symmetricKey.getEncoded(), publicKey);
//
//        // Encode the encrypted key as Base64 for inclusion in an XML element
//        String cipherValue = Base64.getEncoder().encodeToString(encryptedKey);
//        System.out.println("EncryptedKey CipherValue: " + cipherValue);
//    }
//
//    public static byte[] encryptKeyWithRSAOAEP(byte[] key, PublicKey publicKey) throws Exception {
//        Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPPadding", "BC");
//        cipher.init(Cipher.ENCRYPT_MODE, publicKey);
//        return cipher.doFinal(key);
//    }
//}


//import org.bouncycastle.asn1.x500.X500Name;
//import org.bouncycastle.asn1.x509.AlgorithmIdentifier;
//import org.bouncycastle.asn1.x509.SubjectPublicKeyInfo;
//import org.bouncycastle.cert.X509v3CertificateBuilder;
//import org.bouncycastle.cert.jcajce.JcaX509CertificateConverter;
//import org.bouncycastle.cert.jcajce.JcaX509v3CertificateBuilder;
//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//import org.bouncycastle.operator.ContentSigner;
//import org.bouncycastle.operator.jcajce.JcaContentSignerBuilder;
//import org.bouncycastle.operator.jcajce.JcaDigestCalculatorProviderBuilder;
//
//import java.math.BigInteger;
//import java.security.KeyPair;
//import java.security.KeyPairGenerator;
//import java.security.PublicKey;
//import java.security.Security;
//import java.security.cert.X509Certificate;
//import java.util.Base64;
//import java.util.Date;
//
//public class App{
//
//    static {
//        // Add BouncyCastle as a security provider
//        Security.addProvider(new BouncyCastleProvider());
//    }
//
//    public static void main(String[] args) throws Exception {
//        // Generate an RSA key pair
//        KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
//        keyPairGen.initialize(2048);
//        KeyPair keyPair = keyPairGen.generateKeyPair();
//
//        // Generate a self-signed certificate
//        X509Certificate certificate = generateSelfSignedCertificate(keyPair);
//
//        // Print the certificate in PEM format
//        String certificatePEM = convertToPEM(certificate);
//        System.out.println("Generated Certificate:");
//        System.out.println(certificatePEM);
//    }
//
//    public static X509Certificate generateSelfSignedCertificate(KeyPair keyPair) throws Exception {
//        // Set certificate attributes
//        X500Name issuerName = new X500Name("CN=Test Certificate");
//        BigInteger serialNumber = BigInteger.valueOf(System.currentTimeMillis());
//        Date startDate = new Date();
//        Date endDate = new Date(System.currentTimeMillis() + 365L * 24 * 60 * 60 * 1000); // 1 year validity
//        PublicKey publicKey = keyPair.getPublic();
//
//        // Create the certificate
//        X509v3CertificateBuilder certBuilder = new JcaX509v3CertificateBuilder(
//                issuerName, serialNumber, startDate, endDate, issuerName, publicKey
//        );
//
//        ContentSigner contentSigner = new JcaContentSignerBuilder("SHA256WithRSA").build(keyPair.getPrivate());
//        return new JcaX509CertificateConverter().setProvider("BC")
//                .getCertificate(certBuilder.build(contentSigner));
//    }
//
//    public static String convertToPEM(X509Certificate certificate) throws Exception {
//        Base64.Encoder encoder = Base64.getMimeEncoder(64, "\n".getBytes());
//        String certEncoded = new String(encoder.encode(certificate.getEncoded()));
//        return "-----BEGIN CERTIFICATE-----\n" + certEncoded + "\n-----END CERTIFICATE-----";
//    }
//}


////---------------key encrypted-------------------------
//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//
//import javax.crypto.Cipher;
//import javax.crypto.KeyGenerator;
//import javax.crypto.SecretKey;
//import java.security.KeyFactory;
//import java.security.PublicKey;
//import java.security.Security;
//import java.security.cert.CertificateFactory;
//import java.security.cert.X509Certificate;
//import java.util.Base64;
//
//public class App {
//
//    static {
//        // Add BouncyCastle as a security provider
//        Security.addProvider(new BouncyCastleProvider());
//    }
//
//    public static void main(String[] args) throws Exception {
//        // Generate a symmetric key (AES key in this case)
//        KeyGenerator keyGen = KeyGenerator.getInstance("AES");
//        keyGen.init(256);
//        SecretKey symmetricKey = keyGen.generateKey();
//
//        // Generated certificate string
//        String certificateString = "-----BEGIN CERTIFICATE-----\r\n"
//        		+ "MIICtDCCAZygAwIBAgIGAY+VvpDSMA0GCSqGSIb3DQEBCwUAMBsxGTAXBgNVBAMM\r\n"
//        		+ "EFRlc3QgQ2VydGlmaWNhdGUwHhcNMjQwNTIwMTEyNDA1WhcNMjUwNTIwMTEyNDA1\r\n"
//        		+ "WjAbMRkwFwYDVQQDDBBUZXN0IENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEF\r\n"
//        		+ "AAOCAQ8AMIIBCgKCAQEA0xG1w6kUTmlN6sk9poEOjeBbfALT2mIfC/rsDy8a+M1T\r\n"
//        		+ "RfMv0DFay6ycDHPhcOIQn25Ub+MOkcGzpOD1V7X2/VDwaDlSiqfDBS/1pgz9m5Z2\r\n"
//        		+ "fFlLjPI0B73RkfYQrM99ejPQobJKsiwATQhcx0yFJKeimT6Nk9wYo+VG+d+/Sed9\r\n"
//        		+ "N4cMrD+S0/CvRaXx7lkdeCmLtWLIQwEKmagK/qk9A/n+fFypdXMLgXuU0cnz6PRb\r\n"
//        		+ "8GpByNX+EqZ3XBgJmHu4OJuGyEGYhOII8Q16BQZczR9CwV0gZHBjycPWAjcxFYau\r\n"
//        		+ "CsZK59SNtXK09q7p8wud3f4NJC+7I6SGTF6LNKEmHQIDAQABMA0GCSqGSIb3DQEB\r\n"
//        		+ "CwUAA4IBAQBnFU091UabnP/wu+8w/2pNpVWvgqhhohFQpBZKhz0yATxYNfz3U1kp\r\n"
//        		+ "nQto8+LvFnxsxLCE0VZKeZmuk3y7OD0SxksWW6Xq/YwRjcLdbPnk3IWLuf62lPTo\r\n"
//        		+ "O25rYWmKZBiNIgiCmVNQKs0s71ZC74umP3l7GX9F3QTwkiQxpUzhRmf/HV9fj1k2\r\n"
//        		+ "T/v0JtB56e7fiffLZ4yTE6pWEabQfBLHAsXKnBDIZtTGK04FKrkmKmQqhMiNOvTR\r\n"
//        		+ "5mOdeAShP7P3fMEwxQxsVeJHvGzgQ+7njBDjrWxNaVA7t6IEkiPezdKw6RKv65FR\r\n"
//        		+ "Nm/udaOWAi2+C3etvXEoQswBk4vRWeY/\r\n"
//        		+ "-----END CERTIFICATE-----";
//
//        // Extract the public key from the certificate
//        PublicKey publicKey = getPublicKeyFromCertificate(certificateString);
//        System.out.println(publicKey);
//        // Encrypt the symmetric key using RSA-OAEP with MGF1
//        byte[] encryptedKey = encryptKeyWithRSAOAEP(symmetricKey.getEncoded(), publicKey);
//
//        // Encode the encrypted key as Base64 for inclusion in an XML element
//        String cipherValue = Base64.getEncoder().encodeToString(encryptedKey);
//        System.out.println("EncryptedKey CipherValue: " + cipherValue);
//    }
//
//    public static PublicKey getPublicKeyFromCertificate(String certString) throws Exception {
//        certString = certString.replace("-----BEGIN CERTIFICATE-----", "")
//                               .replace("-----END CERTIFICATE-----", "")
//                               .replaceAll("\\s", "");
//
//        byte[] certBytes = Base64.getDecoder().decode(certString);
//        CertificateFactory certificateFactory = CertificateFactory.getInstance("X.509");
//        X509Certificate certificate = (X509Certificate) certificateFactory.generateCertificate(new java.io.ByteArrayInputStream(certBytes));
//        return certificate.getPublicKey();
//    }
//
//    public static byte[] encryptKeyWithRSAOAEP(byte[] key, PublicKey publicKey) throws Exception {
//        Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding", "BC");
//        cipher.init(Cipher.ENCRYPT_MODE, publicKey);
//        return cipher.doFinal(key);
//    }
//}
//
//----------------timestamp----------
//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//
//import javax.xml.bind.DatatypeConverter;
//import javax.xml.parsers.DocumentBuilder;
//import javax.xml.parsers.DocumentBuilderFactory;
//import javax.xml.transform.Transformer;
//import javax.xml.transform.TransformerFactory;
//import javax.xml.transform.dom.DOMSource;
//import javax.xml.transform.stream.StreamResult;
//import java.io.StringWriter;
//import java.security.*;
//import java.util.Base64;
//import java.util.Date;
//import javax.crypto.Cipher;
//
//import org.w3c.dom.Document;
//import org.w3c.dom.Element;
//
//public class App {
//
//    static {
//        Security.addProvider(new BouncyCastleProvider());
//    }
//
//    public static void main(String[] args) throws Exception {
//        // Generate RSA key pair
//        KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
//        keyPairGen.initialize(2048);
//        KeyPair keyPair = keyPairGen.generateKeyPair();
//        PublicKey publicKey = keyPair.getPublic();
//        PrivateKey privateKey = keyPair.getPrivate();
//
//        // Generate timestamp
////        String timestamp = generateTimestamp();
//        String timestamp = "2024-04-24T15:49:30.336Z";
//        System.out.println("Timestamp: " + timestamp);
//
//        // Compute SHA1 digest
//        byte[] digest = computeDigest(timestamp);
//        System.out.println("Digest (Base64): " + Base64.getEncoder().encodeToString(digest));
//
//        // Encrypt timestamp
//        byte[] encryptedTimestamp = encryptTimestamp(timestamp, publicKey);
//        System.out.println("Encrypted Timestamp (Base64): " + Base64.getEncoder().encodeToString(encryptedTimestamp));
//
//        // Sign the digest using RSA-SHA1
//        byte[] signature = signDigest(digest, privateKey);
//        System.out.println("Signature (Base64): " + Base64.getEncoder().encodeToString(signature));
//
//        // Create XML structure
//        String xml = createXMLStructure(timestamp, digest, encryptedTimestamp, signature);
//        System.out.println("XML Structure: \n" + xml);
//    }
//
//    private static String generateTimestamp() {
//        // Generate a simple timestamp
//        return Long.toString(new Date().getTime());
//    }
//
//    private static byte[] computeDigest(String data) throws Exception {
//        MessageDigest digest = MessageDigest.getInstance("SHA-1");
//        return digest.digest(data.getBytes("UTF-8"));
//    }
//
//    private static byte[] encryptTimestamp(String timestamp, PublicKey publicKey) throws Exception {
//        Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPPadding", "BC");
//        cipher.init(Cipher.ENCRYPT_MODE, publicKey);
//        return cipher.doFinal(timestamp.getBytes("UTF-8"));
//    }
//
//    private static byte[] signDigest(byte[] digest, PrivateKey privateKey) throws Exception {
//        Signature signature = Signature.getInstance("SHA1withRSA");
//        signature.initSign(privateKey);
//        signature.update(digest);
//        return signature.sign();
//    }
//
//    private static String createXMLStructure(String timestamp, byte[] digest, byte[] encryptedTimestamp, byte[] signature) throws Exception {
//        DocumentBuilderFactory docFactory = DocumentBuilderFactory.newInstance();
//        DocumentBuilder docBuilder = docFactory.newDocumentBuilder();
//        Document doc = docBuilder.newDocument();
//
//        // Create Signature element
//        Element signatureElement = doc.createElement("Signature");
//        doc.appendChild(signatureElement);
//
//        // Create SignatureMethod element
//        Element signatureMethod = doc.createElement("SignatureMethod");
//        signatureMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#rsa-sha1");
//        signatureElement.appendChild(signatureMethod);
//
//        // Create Reference element
//        Element reference = doc.createElement("Reference");
//        reference.setAttribute("URI", "#TS");
//        signatureElement.appendChild(reference);
//
//        // Create DigestMethod element
//        Element digestMethod = doc.createElement("DigestMethod");
//        digestMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#sha1");
//        reference.appendChild(digestMethod);
//
//        // Create DigestValue element
//        Element digestValue = doc.createElement("DigestValue");
//        digestValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(digest)));
//        reference.appendChild(digestValue);
//
//        // Create EncryptedTimestamp element
//        Element encryptedTimestampElement = doc.createElement("EncryptedTimestamp");
//        encryptedTimestampElement.setAttribute("Algorithm", "http://www.w3.org/2001/04/xmlenc#rsa-oaep-mgf1p");
//        encryptedTimestampElement.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(encryptedTimestamp)));
//        signatureElement.appendChild(encryptedTimestampElement);
//
//        // Create SignatureValue element
//        Element signatureValue = doc.createElement("SignatureValue");
//        signatureValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(signature)));
//        signatureElement.appendChild(signatureValue);
//
//        // Transform document to string
//        TransformerFactory transformerFactory = TransformerFactory.newInstance();
//        Transformer transformer = transformerFactory.newTransformer();
//        DOMSource source = new DOMSource(doc);
//        StringWriter writer = new StringWriter();
//        StreamResult result = new StreamResult(writer);
//        transformer.transform(source, result);
//
//        return writer.toString();
//    }
//}
//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//import javax.xml.bind.DatatypeConverter;
//import javax.xml.parsers.DocumentBuilder;
//import javax.xml.parsers.DocumentBuilderFactory;
//import javax.xml.transform.Transformer;
//import javax.xml.transform.TransformerFactory;
//import javax.xml.transform.dom.DOMSource;
//import javax.xml.transform.stream.StreamResult;
//import java.io.StringWriter;
//import java.security.*;
//import java.util.Base64;
//import org.w3c.dom.Document;
//import org.w3c.dom.Element;
//
//public class App {
//
//    static {
//        Security.addProvider(new BouncyCastleProvider());
//    }
//
//    public static void main(String[] args) throws Exception {
//        // Sample username and password
//        String username = "B000200206";
//        String password = "12345678";
//
//        // Concatenate username and password to create the plaintext of UsernameToken
//        String usernameToken = username + password;
//        System.out.println("UsernameToken: " + usernameToken);
//
//        // Compute SHA1 digest of the UsernameToken
//        byte[] digest = computeDigest(usernameToken);
//        System.out.println("Digest (Base64): " + Base64.getEncoder().encodeToString(digest));
//
//        // Generate RSA key pair
//        KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
//        keyPairGen.initialize(2048);
//        KeyPair keyPair = keyPairGen.generateKeyPair();
//        PublicKey publicKey = keyPair.getPublic();
//        PrivateKey privateKey = keyPair.getPrivate();
//
//        // Sign the digest using RSA-SHA1
//        byte[] signature = signDigest(digest, privateKey);
//        System.out.println("Signature (Base64): " + Base64.getEncoder().encodeToString(signature));
//
//        // Create XML structure
//        String xml = createXMLStructure(digest, signature);
//        System.out.println("XML Structure: \n" + xml);
//    }
//
//    private static byte[] computeDigest(String data) throws Exception {
//        MessageDigest digest = MessageDigest.getInstance("SHA-1");
//        return digest.digest(data.getBytes("UTF-8"));
//    }
//
//    private static byte[] signDigest(byte[] digest, PrivateKey privateKey) throws Exception {
//        Signature signature = Signature.getInstance("SHA1withRSA");
//        signature.initSign(privateKey);
//        signature.update(digest);
//        return signature.sign();
//    }
//
//    private static String createXMLStructure(byte[] digest, byte[] signature) throws Exception {
//        DocumentBuilderFactory docFactory = DocumentBuilderFactory.newInstance();
//        DocumentBuilder docBuilder = docFactory.newDocumentBuilder();
//        Document doc = docBuilder.newDocument();
//
//        // Create Signature element
//        Element signatureElement = doc.createElement("Signature");
//        doc.appendChild(signatureElement);
//
//        // Create SignatureMethod element
//        Element signatureMethod = doc.createElement("SignatureMethod");
//        signatureMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#rsa-sha1");
//        signatureElement.appendChild(signatureMethod);
//
//        // Create Reference element
//        Element reference = doc.createElement("Reference");
//        reference.setAttribute("URI", "#UsernameToken");
//        signatureElement.appendChild(reference);
//
//        // Create DigestMethod element
//        Element digestMethod = doc.createElement("DigestMethod");
//        digestMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#sha1");
//        reference.appendChild(digestMethod);
//
//        // Create DigestValue element
//        Element digestValue = doc.createElement("DigestValue");
//        digestValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(digest)));
//        reference.appendChild(digestValue);
//
//        // Create SignatureValue element
//        Element signatureValue = doc.createElement("SignatureValue");
//        signatureValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(signature)));
//        signatureElement.appendChild(signatureValue);
//
//        // Transform document to string
//        TransformerFactory transformerFactory = TransformerFactory.newInstance();
//        Transformer transformer = transformerFactory.newTransformer();
//        DOMSource source = new DOMSource(doc);
//        StringWriter writer = new StringWriter();
//        StreamResult result = new StreamResult(writer);
//        transformer.transform(source, result);
//
//        return writer.toString();
//    }
//}

////i--------------id--------
//import org.bouncycastle.jce.provider.BouncyCastleProvider;
//import javax.xml.bind.DatatypeConverter;
//import javax.xml.parsers.DocumentBuilder;
//import javax.xml.parsers.DocumentBuilderFactory;
//import javax.xml.transform.Transformer;
//import javax.xml.transform.TransformerFactory;
//import javax.xml.transform.dom.DOMSource;
//import javax.xml.transform.stream.StreamResult;
//import java.io.StringWriter;
//import java.security.*;
//import java.util.Base64;
//import org.w3c.dom.Document;
//import org.w3c.dom.Element;
//
//public class App {
//
//    static {
//        Security.addProvider(new BouncyCastleProvider());
//    }
//
//    public static void main(String[] args) throws Exception {
//        // Sample ID
//        String id = "id-c1758946-f0e8-465b-b775-2dfc9ecf45ea";
//
//        // Compute SHA1 digest of the ID
//        byte[] digest = computeDigest(id);
//        System.out.println("Digest (Base64): " + Base64.getEncoder().encodeToString(digest));
//
//        // Generate RSA key pair
//        KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
//        keyPairGen.initialize(2048);
//        KeyPair keyPair = keyPairGen.generateKeyPair();
//        PublicKey publicKey = keyPair.getPublic();
//        PrivateKey privateKey = keyPair.getPrivate();
//
//        // Sign the digest using RSA-SHA1
//        byte[] signature = signDigest(digest, privateKey);
//        System.out.println("Signature (Base64): " + Base64.getEncoder().encodeToString(signature));
//
//        // Create XML structure
//        String xml = createXMLStructure(digest, signature, id);
//        System.out.println("XML Structure: \n" + xml);
//    }
//
//    private static byte[] computeDigest(String data) throws Exception {
//        MessageDigest digest = MessageDigest.getInstance("SHA-1");
//        return digest.digest(data.getBytes("UTF-8"));
//    }
//
//    private static byte[] signDigest(byte[] digest, PrivateKey privateKey) throws Exception {
//        Signature signature = Signature.getInstance("SHA1withRSA");
//        signature.initSign(privateKey);
//        signature.update(digest);
//        return signature.sign();
//    }
//
//    private static String createXMLStructure(byte[] digest, byte[] signature, String id) throws Exception {
//        DocumentBuilderFactory docFactory = DocumentBuilderFactory.newInstance();
//        DocumentBuilder docBuilder = docFactory.newDocumentBuilder();
//        Document doc = docBuilder.newDocument();
//
//        // Create Signature element
//        Element signatureElement = doc.createElement("Signature");
//        doc.appendChild(signatureElement);
//
//        // Create SignatureMethod element
//        Element signatureMethod = doc.createElement("SignatureMethod");
//        signatureMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#rsa-sha1");
//        signatureElement.appendChild(signatureMethod);
//
//        // Create Reference element
//        Element reference = doc.createElement("Reference");
//        reference.setAttribute("URI", "#id");
//        signatureElement.appendChild(reference);
//
//        // Create DigestMethod element
//        Element digestMethod = doc.createElement("DigestMethod");
//        digestMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#sha1");
//        reference.appendChild(digestMethod);
//
//        // Create DigestValue element
//        Element digestValue = doc.createElement("DigestValue");
//        digestValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(digest)));
//        reference.appendChild(digestValue);
//
//        // Create SignatureValue element
//        Element signatureValue = doc.createElement("SignatureValue");
//        signatureValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(signature)));
//        signatureElement.appendChild(signatureValue);
//
//        // Transform document to string
//        TransformerFactory transformerFactory = TransformerFactory.newInstance();
//        Transformer transformer = transformerFactory.newTransformer();
//        DOMSource source = new DOMSource(doc);
//        StringWriter writer = new StringWriter();
//        StreamResult result = new StreamResult(writer);
//        transformer.transform(source, result);
//
//        return writer.toString();
//    }
//}
//

////generate id of type id-b52106e2-d4d5-424f-8a63-8862134f88f8
//import java.security.*;
//import java.util.Collections;
//
//import javax.xml.crypto.dsig.*;
//import javax.xml.crypto.dsig.dom.DOMSignContext;
//import javax.xml.crypto.dsig.keyinfo.*;
//import javax.xml.crypto.dsig.spec.*;
//import javax.xml.parsers.*;
//import javax.xml.transform.Transformer;
//import javax.xml.transform.TransformerFactory;
//import javax.xml.transform.dom.DOMSource;
//import javax.xml.transform.stream.StreamResult;
//
//import org.w3c.dom.*;
//
//public class App {
//
//    public static void main(String[] args) throws Exception {
//        // Step 1: Generate a random reference ID
//        String referenceID = generateReferenceID();
//        System.out.println("Reference ID: " + referenceID);
//
//        // Step 2: Create a SOAP message (for simplicity, let's consider a simple XML document)
//        DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
//        DocumentBuilder db = dbf.newDocumentBuilder();
//        Document doc = db.newDocument();
//        Element rootElement = doc.createElement("SOAP-ENV:Envelope");
//        doc.appendChild(rootElement);
//        Element bodyElement = doc.createElement("SOAP-ENV:Body");
//        bodyElement.setTextContent("This is the content of the SOAP Body.");
//        rootElement.appendChild(bodyElement);
//
//        // Step 3: Create a digital signature
//        // Create a DOM XMLSignatureFactory
//        XMLSignatureFactory signatureFactory = XMLSignatureFactory.getInstance("DOM");
//
//        // Create a Reference to the enveloped document (in this case, we are signing the whole document)
//        Reference ref = signatureFactory.newReference("", signatureFactory.newDigestMethod(DigestMethod.SHA1, null));
//
//        // Create the SignedInfo
//        SignedInfo signedInfo = signatureFactory.newSignedInfo(signatureFactory.newCanonicalizationMethod(CanonicalizationMethod.INCLUSIVE,
//                (C14NMethodParameterSpec) null), signatureFactory.newSignatureMethod(SignatureMethod.RSA_SHA1, null), 
//                Collections.singletonList(ref));
//        KeyPairGenerator kpg = KeyPairGenerator.getInstance("RSA");
//        kpg.initialize(2048);
//        KeyPair kp = kpg.generateKeyPair();
//
//        KeyInfoFactory kif = signatureFactory.getKeyInfoFactory();
//        KeyValue kv = kif.newKeyValue(kp.getPublic());
//
//        KeyInfo ki = kif.newKeyInfo(Collections.singletonList(kv));
//
//        XMLSignature signature = signatureFactory.newXMLSignature(signedInfo, ki);
//        DOMSignContext dsc = new DOMSignContext(kp.getPrivate(), doc);
//        signature.sign(dsc);
//
//        // Step 4: Print the signed SOAP message
//        System.out.println("Signed SOAP message:\n" + convertDocumentToString(doc));
//    }
//
//    private static String generateReferenceID() {
//        return "id-" + java.util.UUID.randomUUID().toString();
//    }
//
//    private static String convertDocumentToString(Document doc) throws Exception {
//        DOMSource domSource = new DOMSource(doc);
//        StringWriter writer = new StringWriter();
//        StreamResult result = new StreamResult(writer);
//        TransformerFactory tf = TransformerFactory.newInstance();
//        Transformer transformer = tf.newTransformer();
//        transformer.transform(domSource, result);
//        return writer.toString();
//    }
//}
//


////--------SignatureValue-----------
//import java.io.FileInputStream;
//import java.security.KeyStore;
//import java.io.ByteArrayInputStream;
//import java.io.InputStream;
//import java.security.KeyFactory;
//import java.security.MessageDigest;
//import java.security.PrivateKey;
//import java.security.Signature;
//import java.security.cert.CertificateFactory;
//import java.security.cert.X509Certificate;
//import java.security.spec.PKCS8EncodedKeySpec;
//import java.util.Base64;
//
//public class App {
//    public static void main(String[] args) throws Exception {
//        // Your XML data
//        String xmlData = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">\n" +
//                "    <SOAP-ENV:Header>\n" +
//                "        <wsse:Security mustUnderstand=\"1\">\n" +
//                "            <wsse:UsernameToken>\n" +
//                "                <wsse:Username>B000200206</wsse:Username>\n" +
//                "            </wsse:UsernameToken>\n" +
//                "            <wsu:Timestamp>\n" +
//                "                <wsu:Created>30</wsu:Created>\n" +
//                "                <wsu:Expires>30</wsu:Expires>\n" +
//                "            </wsu:Timestamp>\n" +
//                "            <ds:Signature>\n" +
//                "                <ds:SignedInfo>\n" +
//                "                    <ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>\n" +
//                "                    <ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>\n" +
//                "                </ds:SignedInfo>\n" +
//                "            </ds:Signature>\n" +
//                "        </wsse:Security>\n" +
//                "    </SOAP-ENV:Header>\n" +
//                "    <SOAP-ENV:Body/>\n" +
//                "</SOAP-ENV:Envelope>";
//
//        // Load certificate
//        String certString = "-----BEGIN CERTIFICATE-----\n" +
//                "MIICtDCCAZygAwIBAgIGAY+VvpDSMA0GCSqGSIb3DQEBCwUAMBsxGTAXBgNVBAMM\n" +
//                "EFRlc3QgQ2VydGlmaWNhdGUwHhcNMjQwNTIwMTEyNDA1WhcNMjUwNTIwMTEyNDA1\n" +
//                "WjAbMRkwFwYDVQQDDBBUZXN0IENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEF\n" +
//                "AAOCAQ8AMIIBCgKCAQEA0xG1w6kUTmlN6sk9poEOjeBbfALT2mIfC/rsDy8a+M1T\n" +
//                "RfMv0DFay6ycDHPhcOIQn25Ub+MOkcGzpOD1V7X2/VDwaDlSiqfDBS/1pgz9m5Z2\n" +
//                "fFlLjPI0B73RkfYQrM99ejPQobJKsiwATQhcx0yFJKeimT6Nk9wYo+VG+d+/Sed9\n" +
//                "N4cMrD+S0/CvRaXx7lkdeCmLtWLIQwEKmagK/qk9A/n+fFypdXMLgXuU0cnz6PRb\n" +
//                "8GpByNX+EqZ3XBgJmHu4OJuGyEGYhOII8Q16BQZczR9CwV0gZHBjycPWAjcxFYau\n" +
//                "CsZK59SNtXK09q7p8wud3f4NJC+7I6SGTF6LNKEmHQIDAQABMA0GCSqGSIb3DQEB\n" +
//                "CwUAA4IBAQBnFU091UabnP/wu+8w/2pNpVWvgqhhohFQpBZKhz0yATxYNfz3U1kp\n" +
//                "nQto8+LvFnxsxLCE0VZKeZmuk3y7OD0SxksWW6Xq/YwRjcLdbPnk3IWLuf62lPTo\n" +
//                "O25rYWmKZBiNIgiCmVNQKs0s71ZC74umP3l7GX9F3QTwkiQxpUzhRmf/HV9fj1k2\n" +
//                "T/v0JtB56e7fiffLZ4yTE6pWEabQfBLHAsXKnBDIZtTGK04FKrkmKmQqhMiNOvTR\n" +
//                "5mOdeAShP7P3fMEwxQxsVeJHvGzgQ+7njBDjrWxNaVA7t6IEkiPezdKw6RKv65FR\n" +
//                "Nm/udaOWAi2+C3etvXEoQswBk4vRWeY/\n" +
//                "-----END CERTIFICATE-----";
//
//        // Convert certificate string to X509Certificate
//        CertificateFactory cf = CertificateFactory.getInstance("X.509");
//        InputStream certInputStream = new ByteArrayInputStream(certString.getBytes());
//        X509Certificate cert = (X509Certificate) cf.generateCertificate(certInputStream);
//
//        // Compute SHA-1 hash of canonicalized XML
//        MessageDigest digest = MessageDigest.getInstance("SHA-1");
//        byte[] xmlBytes = xmlData.getBytes("UTF-8");
//        byte[] hashBytes = digest.digest(xmlBytes);
//
//        // Sign the hash
////        PrivateKey privateKey = getPrivateKeyFromCert(cert);
//   
//      
//      KeyStore keystore = KeyStore.getInstance("JKS"); // Or "PKCS12" depending on the type of keystore
//      char[] keystorePassword = "keystorePassword".toCharArray();
//      String keystorePath = "src/main/resources/keystore.jks";
//      keystore.load(new FileInputStream(keystorePath), keystorePassword);
//
//      // Get the private key using the alias and password
//      String alias = "keyAlias";
//      char[] keyPassword = "keyPassword".toCharArray();
//      PrivateKey privateKey = (PrivateKey) keystore.getKey(alias, keyPassword);
//      
//      
//        Signature signature = Signature.getInstance("SHA1withRSA");
//        signature.initSign(privateKey);
//        signature.update(hashBytes);
//        byte[] signedBytes = signature.sign();
//
//        // Print the Base64 encoded signature
//        System.out.println("SHA-1 Signature: " + Base64.getEncoder().encodeToString(signedBytes));
//    }
////
////    private static PrivateKey getPrivateKeyFromCert(X509Certificate cert) throws Exception {
////        byte[] privateKeyBytes = cert.getPublicKey().getEncoded();
////        PKCS8EncodedKeySpec keySpec = new PKCS8EncodedKeySpec(privateKeyBytes);
////        KeyFactory keyFactory = KeyFactory.getInstance("RSA");
////        return keyFactory.generatePrivate(keySpec);
////    }
//}



////-------encrypted data-------
//import javax.crypto.Cipher;
//import javax.crypto.KeyGenerator;
//import javax.crypto.SecretKey;
//import javax.crypto.spec.IvParameterSpec;
//import java.io.ByteArrayInputStream;
//import java.io.FileInputStream;
//import java.security.KeyStore;
//import java.security.PrivateKey;
//import java.security.PublicKey;
//import java.security.cert.Certificate;
//import java.util.Base64;
//import java.util.Enumeration;
//import java.util.Properties;
//import java.security.SecureRandom;
//
//public class App {
//    public static void main(String[] args) throws Exception {
//        // Path to your keystore and its password
//        String keystorePath = "src/main/resources/keystore.jks";
//        String keystorePassword = "keystorePassword";
//        String keyAlias = "keyAlias";
//        String keyPassword = "keyPassword";
//        
//        // Load the keystore
//        KeyStore keystore = KeyStore.getInstance("JKS");
//        try (FileInputStream keystoreInput = new FileInputStream(keystorePath)) {
//            keystore.load(keystoreInput, keystorePassword.toCharArray());
//        }
//
//        // Retrieve the certificate and private key
//        Certificate cert = keystore.getCertificate(keyAlias);
//        PublicKey publicKey = cert.getPublicKey();
//        PrivateKey privateKey = (PrivateKey) keystore.getKey(keyAlias, keyPassword.toCharArray());
//
//        // Your XML data
////        String xmlData = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">\r\n"
////        		+ "	<SOAP-ENV:Header>\r\n"
////        		+ "	      <wsse:Security mustUnderstand=\"1\">\r\n"
////        		+ "		<wsse:UsernameToken>\r\n"
////        		+ "			<wsse:Username>B000200206</wsse:Username>\r\n"
////        		+ "		</wsse:UsernameToken>\r\n"
////        		+ "        	<wsu:Timestamp>\r\n"
////        		+ "        		<wsu:Created>30</wsu:Created>\r\n"
////        		+ "        		<wsu:Expires>30</wsu:Expires>\r\n"
////        		+ "		</wsu:Timestamp>\r\n"
////        		+ "        	<ds:Signature>\r\n"
////        		+ "          		<ds:SignedInfo>\r\n"
////        		+ "             			<ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>\r\n"
////        		+ "             				<ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>\r\n"
////        		+ "          		</ds:SignedInfo>\r\n"
////        		+ "        	</ds:Signature>\r\n"
////        		+ "  	     </wsse:Security>\r\n"
////        		+ "  	</SOAP-ENV:Header>\r\n"
////        		+ "  	<SOAP-ENV:Body/>\r\n"
////        		+ "</SOAP-ENV:Envelope>";
//        String xmlData="<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\"><SOAP-ENV:Header><wsse:Security mustUnderstand=\"1\"><wsse:UsernameToken><wsse:Username>B000200206</wsse:Username></wsse:UsernameToken><wsu:Timestamp><wsu:Created>30</wsu:Created><wsu:Expires>30</wsu:Expires></wsu:Timestamp><ds:Signature><ds:SignedInfo><ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/><ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/></ds:SignedInfo></ds:Signature></wsse:Security></SOAP-ENV:Header><SOAP-ENV:Body/></SOAP-ENV:Envelope>";
//
//        // Generate AES key and IV
//        KeyGenerator keyGen = KeyGenerator.getInstance("AES");
//        keyGen.init(128);
//        SecretKey aesKey = keyGen.generateKey();
//        byte[] iv = new byte[16]; // AES block size is 16 bytes
//        SecureRandom random = new SecureRandom();
//        random.nextBytes(iv);
//        IvParameterSpec ivSpec = new IvParameterSpec(iv);
//
//        // Encrypt XML data using AES
//        Cipher aesCipher = Cipher.getInstance("AES/CBC/PKCS5Padding");
//        aesCipher.init(Cipher.ENCRYPT_MODE, aesKey, ivSpec);
//        byte[] encryptedXmlBytes = aesCipher.doFinal(xmlData.getBytes("UTF-8"));
//
//        // Encrypt AES key using RSA (public key from the certificate)
//        Cipher rsaCipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-1AndMGF1Padding");
//        rsaCipher.init(Cipher.WRAP_MODE, publicKey);
//        byte[] encryptedAesKeyBytes = rsaCipher.wrap(aesKey);
//
//        // Base64 encode the encrypted data
//        String encryptedXml = Base64.getEncoder().encodeToString(encryptedXmlBytes);
//        String encryptedAesKey = Base64.getEncoder().encodeToString(encryptedAesKeyBytes);
//        String ivBase64 = Base64.getEncoder().encodeToString(iv);
//
//        // Print the encrypted data
//        System.out.println("Encrypted XML: " + encryptedXml);
//        System.out.println("Encrypted AES Key: " + encryptedAesKey);
//        System.out.println("IV: " + ivBase64);
//    }
//}





final:


//---------------key encrypted-------------------------
import org.bouncycastle.jce.provider.BouncyCastleProvider;

import javax.crypto.Cipher;
import javax.crypto.KeyGenerator;
import javax.crypto.SecretKey;
import java.security.KeyFactory;
import java.security.PublicKey;
import java.security.Security;
import java.security.cert.CertificateFactory;
import java.security.cert.X509Certificate;
import java.util.Base64;

public class App {

   static {
       // Add BouncyCastle as a security provider
       Security.addProvider(new BouncyCastleProvider());
   }

   public static void main(String[] args) throws Exception {
       // Generate a symmetric key (AES key in this case)
       KeyGenerator keyGen = KeyGenerator.getInstance("AES");
       keyGen.init(256);
       SecretKey symmetricKey = keyGen.generateKey();

       // Generated certificate string
       String certificateString = "-----BEGIN CERTIFICATE-----\r\n"
       		+ "MIICtDCCAZygAwIBAgIGAY+VvpDSMA0GCSqGSIb3DQEBCwUAMBsxGTAXBgNVBAMM\r\n"
       		+ "EFRlc3QgQ2VydGlmaWNhdGUwHhcNMjQwNTIwMTEyNDA1WhcNMjUwNTIwMTEyNDA1\r\n"
       		+ "WjAbMRkwFwYDVQQDDBBUZXN0IENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEF\r\n"
       		+ "AAOCAQ8AMIIBCgKCAQEA0xG1w6kUTmlN6sk9poEOjeBbfALT2mIfC/rsDy8a+M1T\r\n"
       		+ "RfMv0DFay6ycDHPhcOIQn25Ub+MOkcGzpOD1V7X2/VDwaDlSiqfDBS/1pgz9m5Z2\r\n"
       		+ "fFlLjPI0B73RkfYQrM99ejPQobJKsiwATQhcx0yFJKeimT6Nk9wYo+VG+d+/Sed9\r\n"
       		+ "N4cMrD+S0/CvRaXx7lkdeCmLtWLIQwEKmagK/qk9A/n+fFypdXMLgXuU0cnz6PRb\r\n"
       		+ "8GpByNX+EqZ3XBgJmHu4OJuGyEGYhOII8Q16BQZczR9CwV0gZHBjycPWAjcxFYau\r\n"
       		+ "CsZK59SNtXK09q7p8wud3f4NJC+7I6SGTF6LNKEmHQIDAQABMA0GCSqGSIb3DQEB\r\n"
       		+ "CwUAA4IBAQBnFU091UabnP/wu+8w/2pNpVWvgqhhohFQpBZKhz0yATxYNfz3U1kp\r\n"
       		+ "nQto8+LvFnxsxLCE0VZKeZmuk3y7OD0SxksWW6Xq/YwRjcLdbPnk3IWLuf62lPTo\r\n"
       		+ "O25rYWmKZBiNIgiCmVNQKs0s71ZC74umP3l7GX9F3QTwkiQxpUzhRmf/HV9fj1k2\r\n"
       		+ "T/v0JtB56e7fiffLZ4yTE6pWEabQfBLHAsXKnBDIZtTGK04FKrkmKmQqhMiNOvTR\r\n"
       		+ "5mOdeAShP7P3fMEwxQxsVeJHvGzgQ+7njBDjrWxNaVA7t6IEkiPezdKw6RKv65FR\r\n"
       		+ "Nm/udaOWAi2+C3etvXEoQswBk4vRWeY/\r\n"
       		+ "-----END CERTIFICATE-----";

       // Extract the public key from the certificate
       PublicKey publicKey = getPublicKeyFromCertificate(certificateString);
       System.out.println(publicKey);
       // Encrypt the symmetric key using RSA-OAEP with MGF1
       byte[] encryptedKey = encryptKeyWithRSAOAEP(symmetricKey.getEncoded(), publicKey);

       // Encode the encrypted key as Base64 for inclusion in an XML element
       String cipherValue = Base64.getEncoder().encodeToString(encryptedKey);
       System.out.println("EncryptedKey CipherValue: " + cipherValue);
   }

   public static PublicKey getPublicKeyFromCertificate(String certString) throws Exception {
       certString = certString.replace("-----BEGIN CERTIFICATE-----", "")
                              .replace("-----END CERTIFICATE-----", "")
                              .replaceAll("\\s", "");

       byte[] certBytes = Base64.getDecoder().decode(certString);
       CertificateFactory certificateFactory = CertificateFactory.getInstance("X.509");
       X509Certificate certificate = (X509Certificate) certificateFactory.generateCertificate(new java.io.ByteArrayInputStream(certBytes));
       return certificate.getPublicKey();
   }

   public static byte[] encryptKeyWithRSAOAEP(byte[] key, PublicKey publicKey) throws Exception {
       Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-256AndMGF1Padding", "BC");
       cipher.init(Cipher.ENCRYPT_MODE, publicKey);
       return cipher.doFinal(key);
   }
}

----------------timestamp----------
import org.bouncycastle.jce.provider.BouncyCastleProvider;

import javax.xml.bind.DatatypeConverter;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.transform.Transformer;
import javax.xml.transform.TransformerFactory;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;
import java.io.StringWriter;
import java.security.*;
import java.util.Base64;
import java.util.Date;
import javax.crypto.Cipher;

import org.w3c.dom.Document;
import org.w3c.dom.Element;

public class App {

   static {
       Security.addProvider(new BouncyCastleProvider());
   }

   public static void main(String[] args) throws Exception {
       // Generate RSA key pair
       KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
       keyPairGen.initialize(2048);
       KeyPair keyPair = keyPairGen.generateKeyPair();
       PublicKey publicKey = keyPair.getPublic();
       PrivateKey privateKey = keyPair.getPrivate();

       // Generate timestamp
//        String timestamp = generateTimestamp();
       String timestamp = "2024-04-24T15:49:30.336Z";
       System.out.println("Timestamp: " + timestamp);

       // Compute SHA1 digest
       byte[] digest = computeDigest(timestamp);
       System.out.println("Digest (Base64): " + Base64.getEncoder().encodeToString(digest));

       // Encrypt timestamp
       byte[] encryptedTimestamp = encryptTimestamp(timestamp, publicKey);
       System.out.println("Encrypted Timestamp (Base64): " + Base64.getEncoder().encodeToString(encryptedTimestamp));

       // Sign the digest using RSA-SHA1
       byte[] signature = signDigest(digest, privateKey);
       System.out.println("Signature (Base64): " + Base64.getEncoder().encodeToString(signature));

       // Create XML structure
       String xml = createXMLStructure(timestamp, digest, encryptedTimestamp, signature);
       System.out.println("XML Structure: \n" + xml);
   }

   private static String generateTimestamp() {
       // Generate a simple timestamp
       return Long.toString(new Date().getTime());
   }

   private static byte[] computeDigest(String data) throws Exception {
       MessageDigest digest = MessageDigest.getInstance("SHA-1");
       return digest.digest(data.getBytes("UTF-8"));
   }

   private static byte[] encryptTimestamp(String timestamp, PublicKey publicKey) throws Exception {
       Cipher cipher = Cipher.getInstance("RSA/ECB/OAEPPadding", "BC");
       cipher.init(Cipher.ENCRYPT_MODE, publicKey);
       return cipher.doFinal(timestamp.getBytes("UTF-8"));
   }

   private static byte[] signDigest(byte[] digest, PrivateKey privateKey) throws Exception {
       Signature signature = Signature.getInstance("SHA1withRSA");
       signature.initSign(privateKey);
       signature.update(digest);
       return signature.sign();
   }

   private static String createXMLStructure(String timestamp, byte[] digest, byte[] encryptedTimestamp, byte[] signature) throws Exception {
       DocumentBuilderFactory docFactory = DocumentBuilderFactory.newInstance();
       DocumentBuilder docBuilder = docFactory.newDocumentBuilder();
       Document doc = docBuilder.newDocument();

       // Create Signature element
       Element signatureElement = doc.createElement("Signature");
       doc.appendChild(signatureElement);

       // Create SignatureMethod element
       Element signatureMethod = doc.createElement("SignatureMethod");
       signatureMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#rsa-sha1");
       signatureElement.appendChild(signatureMethod);

       // Create Reference element
       Element reference = doc.createElement("Reference");
       reference.setAttribute("URI", "#TS");
       signatureElement.appendChild(reference);

       // Create DigestMethod element
       Element digestMethod = doc.createElement("DigestMethod");
       digestMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#sha1");
       reference.appendChild(digestMethod);

       // Create DigestValue element
       Element digestValue = doc.createElement("DigestValue");
       digestValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(digest)));
       reference.appendChild(digestValue);

       // Create EncryptedTimestamp element
       Element encryptedTimestampElement = doc.createElement("EncryptedTimestamp");
       encryptedTimestampElement.setAttribute("Algorithm", "http://www.w3.org/2001/04/xmlenc#rsa-oaep-mgf1p");
       encryptedTimestampElement.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(encryptedTimestamp)));
       signatureElement.appendChild(encryptedTimestampElement);

       // Create SignatureValue element
       Element signatureValue = doc.createElement("SignatureValue");
       signatureValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(signature)));
       signatureElement.appendChild(signatureValue);

       // Transform document to string
       TransformerFactory transformerFactory = TransformerFactory.newInstance();
       Transformer transformer = transformerFactory.newTransformer();
       DOMSource source = new DOMSource(doc);
       StringWriter writer = new StringWriter();
       StreamResult result = new StreamResult(writer);
       transformer.transform(source, result);

       return writer.toString();
   }
}
import org.bouncycastle.jce.provider.BouncyCastleProvider;
import javax.xml.bind.DatatypeConverter;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.transform.Transformer;
import javax.xml.transform.TransformerFactory;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;
import java.io.StringWriter;
import java.security.*;
import java.util.Base64;
import org.w3c.dom.Document;
import org.w3c.dom.Element;

public class App {

   static {
       Security.addProvider(new BouncyCastleProvider());
   }

   public static void main(String[] args) throws Exception {
       // Sample username and password
       String username = "B000200206";
       String password = "12345678";

       // Concatenate username and password to create the plaintext of UsernameToken
       String usernameToken = username + password;
       System.out.println("UsernameToken: " + usernameToken);

       // Compute SHA1 digest of the UsernameToken
       byte[] digest = computeDigest(usernameToken);
       System.out.println("Digest (Base64): " + Base64.getEncoder().encodeToString(digest));

       // Generate RSA key pair
       KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
       keyPairGen.initialize(2048);
       KeyPair keyPair = keyPairGen.generateKeyPair();
       PublicKey publicKey = keyPair.getPublic();
       PrivateKey privateKey = keyPair.getPrivate();

       // Sign the digest using RSA-SHA1
       byte[] signature = signDigest(digest, privateKey);
       System.out.println("Signature (Base64): " + Base64.getEncoder().encodeToString(signature));

       // Create XML structure
       String xml = createXMLStructure(digest, signature);
       System.out.println("XML Structure: \n" + xml);
   }

   private static byte[] computeDigest(String data) throws Exception {
       MessageDigest digest = MessageDigest.getInstance("SHA-1");
       return digest.digest(data.getBytes("UTF-8"));
   }

   private static byte[] signDigest(byte[] digest, PrivateKey privateKey) throws Exception {
       Signature signature = Signature.getInstance("SHA1withRSA");
       signature.initSign(privateKey);
       signature.update(digest);
       return signature.sign();
   }

   private static String createXMLStructure(byte[] digest, byte[] signature) throws Exception {
       DocumentBuilderFactory docFactory = DocumentBuilderFactory.newInstance();
       DocumentBuilder docBuilder = docFactory.newDocumentBuilder();
       Document doc = docBuilder.newDocument();

       // Create Signature element
       Element signatureElement = doc.createElement("Signature");
       doc.appendChild(signatureElement);

       // Create SignatureMethod element
       Element signatureMethod = doc.createElement("SignatureMethod");
       signatureMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#rsa-sha1");
       signatureElement.appendChild(signatureMethod);

       // Create Reference element
       Element reference = doc.createElement("Reference");
       reference.setAttribute("URI", "#UsernameToken");
       signatureElement.appendChild(reference);

       // Create DigestMethod element
       Element digestMethod = doc.createElement("DigestMethod");
       digestMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#sha1");
       reference.appendChild(digestMethod);

       // Create DigestValue element
       Element digestValue = doc.createElement("DigestValue");
       digestValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(digest)));
       reference.appendChild(digestValue);

       // Create SignatureValue element
       Element signatureValue = doc.createElement("SignatureValue");
       signatureValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(signature)));
       signatureElement.appendChild(signatureValue);

       // Transform document to string
       TransformerFactory transformerFactory = TransformerFactory.newInstance();
       Transformer transformer = transformerFactory.newTransformer();
       DOMSource source = new DOMSource(doc);
       StringWriter writer = new StringWriter();
       StreamResult result = new StreamResult(writer);
       transformer.transform(source, result);

       return writer.toString();
   }
}

//i--------------id--------
import org.bouncycastle.jce.provider.BouncyCastleProvider;
import javax.xml.bind.DatatypeConverter;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.transform.Transformer;
import javax.xml.transform.TransformerFactory;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;
import java.io.StringWriter;
import java.security.*;
import java.util.Base64;
import org.w3c.dom.Document;
import org.w3c.dom.Element;

public class App {

   static {
       Security.addProvider(new BouncyCastleProvider());
   }

   public static void main(String[] args) throws Exception {
       // Sample ID
       String id = "id-c1758946-f0e8-465b-b775-2dfc9ecf45ea";

       // Compute SHA1 digest of the ID
       byte[] digest = computeDigest(id);
       System.out.println("Digest (Base64): " + Base64.getEncoder().encodeToString(digest));

       // Generate RSA key pair
       KeyPairGenerator keyPairGen = KeyPairGenerator.getInstance("RSA");
       keyPairGen.initialize(2048);
       KeyPair keyPair = keyPairGen.generateKeyPair();
       PublicKey publicKey = keyPair.getPublic();
       PrivateKey privateKey = keyPair.getPrivate();

       // Sign the digest using RSA-SHA1
       byte[] signature = signDigest(digest, privateKey);
       System.out.println("Signature (Base64): " + Base64.getEncoder().encodeToString(signature));

       // Create XML structure
       String xml = createXMLStructure(digest, signature, id);
       System.out.println("XML Structure: \n" + xml);
   }

   private static byte[] computeDigest(String data) throws Exception {
       MessageDigest digest = MessageDigest.getInstance("SHA-1");
       return digest.digest(data.getBytes("UTF-8"));
   }

   private static byte[] signDigest(byte[] digest, PrivateKey privateKey) throws Exception {
       Signature signature = Signature.getInstance("SHA1withRSA");
       signature.initSign(privateKey);
       signature.update(digest);
       return signature.sign();
   }

   private static String createXMLStructure(byte[] digest, byte[] signature, String id) throws Exception {
       DocumentBuilderFactory docFactory = DocumentBuilderFactory.newInstance();
       DocumentBuilder docBuilder = docFactory.newDocumentBuilder();
       Document doc = docBuilder.newDocument();

       // Create Signature element
       Element signatureElement = doc.createElement("Signature");
       doc.appendChild(signatureElement);

       // Create SignatureMethod element
       Element signatureMethod = doc.createElement("SignatureMethod");
       signatureMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#rsa-sha1");
       signatureElement.appendChild(signatureMethod);

       // Create Reference element
       Element reference = doc.createElement("Reference");
       reference.setAttribute("URI", "#id");
       signatureElement.appendChild(reference);

       // Create DigestMethod element
       Element digestMethod = doc.createElement("DigestMethod");
       digestMethod.setAttribute("Algorithm", "http://www.w3.org/2000/09/xmldsig#sha1");
       reference.appendChild(digestMethod);

       // Create DigestValue element
       Element digestValue = doc.createElement("DigestValue");
       digestValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(digest)));
       reference.appendChild(digestValue);

       // Create SignatureValue element
       Element signatureValue = doc.createElement("SignatureValue");
       signatureValue.appendChild(doc.createTextNode(Base64.getEncoder().encodeToString(signature)));
       signatureElement.appendChild(signatureValue);

       // Transform document to string
       TransformerFactory transformerFactory = TransformerFactory.newInstance();
       Transformer transformer = transformerFactory.newTransformer();
       DOMSource source = new DOMSource(doc);
       StringWriter writer = new StringWriter();
       StreamResult result = new StreamResult(writer);
       transformer.transform(source, result);

       return writer.toString();
   }
}


//generate id of type id-b52106e2-d4d5-424f-8a63-8862134f88f8
import java.security.*;
import java.util.Collections;

import javax.xml.crypto.dsig.*;
import javax.xml.crypto.dsig.dom.DOMSignContext;
import javax.xml.crypto.dsig.keyinfo.*;
import javax.xml.crypto.dsig.spec.*;
import javax.xml.parsers.*;
import javax.xml.transform.Transformer;
import javax.xml.transform.TransformerFactory;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;

import org.w3c.dom.*;

public class App {

   public static void main(String[] args) throws Exception {
       // Step 1: Generate a random reference ID
       String referenceID = generateReferenceID();
       System.out.println("Reference ID: " + referenceID);

       // Step 2: Create a SOAP message (for simplicity, let's consider a simple XML document)
       DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
       DocumentBuilder db = dbf.newDocumentBuilder();
       Document doc = db.newDocument();
       Element rootElement = doc.createElement("SOAP-ENV:Envelope");
       doc.appendChild(rootElement);
       Element bodyElement = doc.createElement("SOAP-ENV:Body");
       bodyElement.setTextContent("This is the content of the SOAP Body.");
       rootElement.appendChild(bodyElement);

       // Step 3: Create a digital signature
       // Create a DOM XMLSignatureFactory
       XMLSignatureFactory signatureFactory = XMLSignatureFactory.getInstance("DOM");

       // Create a Reference to the enveloped document (in this case, we are signing the whole document)
       Reference ref = signatureFactory.newReference("", signatureFactory.newDigestMethod(DigestMethod.SHA1, null));

       // Create the SignedInfo
       SignedInfo signedInfo = signatureFactory.newSignedInfo(signatureFactory.newCanonicalizationMethod(CanonicalizationMethod.INCLUSIVE,
               (C14NMethodParameterSpec) null), signatureFactory.newSignatureMethod(SignatureMethod.RSA_SHA1, null), 
               Collections.singletonList(ref));
       KeyPairGenerator kpg = KeyPairGenerator.getInstance("RSA");
       kpg.initialize(2048);
       KeyPair kp = kpg.generateKeyPair();

       KeyInfoFactory kif = signatureFactory.getKeyInfoFactory();
       KeyValue kv = kif.newKeyValue(kp.getPublic());

       KeyInfo ki = kif.newKeyInfo(Collections.singletonList(kv));

       XMLSignature signature = signatureFactory.newXMLSignature(signedInfo, ki);
       DOMSignContext dsc = new DOMSignContext(kp.getPrivate(), doc);
       signature.sign(dsc);

       // Step 4: Print the signed SOAP message
       System.out.println("Signed SOAP message:\n" + convertDocumentToString(doc));
   }

   private static String generateReferenceID() {
       return "id-" + java.util.UUID.randomUUID().toString();
   }

   private static String convertDocumentToString(Document doc) throws Exception {
       DOMSource domSource = new DOMSource(doc);
       StringWriter writer = new StringWriter();
       StreamResult result = new StreamResult(writer);
       TransformerFactory tf = TransformerFactory.newInstance();
       Transformer transformer = tf.newTransformer();
       transformer.transform(domSource, result);
       return writer.toString();
   }
}



//--------SignatureValue-----------
import java.io.FileInputStream;
import java.security.KeyStore;
import java.io.ByteArrayInputStream;
import java.io.InputStream;
import java.security.KeyFactory;
import java.security.MessageDigest;
import java.security.PrivateKey;
import java.security.Signature;
import java.security.cert.CertificateFactory;
import java.security.cert.X509Certificate;
import java.security.spec.PKCS8EncodedKeySpec;
import java.util.Base64;

public class App {
   public static void main(String[] args) throws Exception {
       // Your XML data
       String xmlData = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">\n" +
               "    <SOAP-ENV:Header>\n" +
               "        <wsse:Security mustUnderstand=\"1\">\n" +
               "            <wsse:UsernameToken>\n" +
               "                <wsse:Username>B000200206</wsse:Username>\n" +
               "            </wsse:UsernameToken>\n" +
               "            <wsu:Timestamp>\n" +
               "                <wsu:Created>30</wsu:Created>\n" +
               "                <wsu:Expires>30</wsu:Expires>\n" +
               "            </wsu:Timestamp>\n" +
               "            <ds:Signature>\n" +
               "                <ds:SignedInfo>\n" +
               "                    <ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>\n" +
               "                    <ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>\n" +
               "                </ds:SignedInfo>\n" +
               "            </ds:Signature>\n" +
               "        </wsse:Security>\n" +
               "    </SOAP-ENV:Header>\n" +
               "    <SOAP-ENV:Body/>\n" +
               "</SOAP-ENV:Envelope>";

       // Load certificate
       String certString = "-----BEGIN CERTIFICATE-----\n" +
               "MIICtDCCAZygAwIBAgIGAY+VvpDSMA0GCSqGSIb3DQEBCwUAMBsxGTAXBgNVBAMM\n" +
               "EFRlc3QgQ2VydGlmaWNhdGUwHhcNMjQwNTIwMTEyNDA1WhcNMjUwNTIwMTEyNDA1\n" +
               "WjAbMRkwFwYDVQQDDBBUZXN0IENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEF\n" +
               "AAOCAQ8AMIIBCgKCAQEA0xG1w6kUTmlN6sk9poEOjeBbfALT2mIfC/rsDy8a+M1T\n" +
               "RfMv0DFay6ycDHPhcOIQn25Ub+MOkcGzpOD1V7X2/VDwaDlSiqfDBS/1pgz9m5Z2\n" +
               "fFlLjPI0B73RkfYQrM99ejPQobJKsiwATQhcx0yFJKeimT6Nk9wYo+VG+d+/Sed9\n" +
               "N4cMrD+S0/CvRaXx7lkdeCmLtWLIQwEKmagK/qk9A/n+fFypdXMLgXuU0cnz6PRb\n" +
               "8GpByNX+EqZ3XBgJmHu4OJuGyEGYhOII8Q16BQZczR9CwV0gZHBjycPWAjcxFYau\n" +
               "CsZK59SNtXK09q7p8wud3f4NJC+7I6SGTF6LNKEmHQIDAQABMA0GCSqGSIb3DQEB\n" +
               "CwUAA4IBAQBnFU091UabnP/wu+8w/2pNpVWvgqhhohFQpBZKhz0yATxYNfz3U1kp\n" +
               "nQto8+LvFnxsxLCE0VZKeZmuk3y7OD0SxksWW6Xq/YwRjcLdbPnk3IWLuf62lPTo\n" +
               "O25rYWmKZBiNIgiCmVNQKs0s71ZC74umP3l7GX9F3QTwkiQxpUzhRmf/HV9fj1k2\n" +
               "T/v0JtB56e7fiffLZ4yTE6pWEabQfBLHAsXKnBDIZtTGK04FKrkmKmQqhMiNOvTR\n" +
               "5mOdeAShP7P3fMEwxQxsVeJHvGzgQ+7njBDjrWxNaVA7t6IEkiPezdKw6RKv65FR\n" +
               "Nm/udaOWAi2+C3etvXEoQswBk4vRWeY/\n" +
               "-----END CERTIFICATE-----";

       // Convert certificate string to X509Certificate
       CertificateFactory cf = CertificateFactory.getInstance("X.509");
       InputStream certInputStream = new ByteArrayInputStream(certString.getBytes());
       X509Certificate cert = (X509Certificate) cf.generateCertificate(certInputStream);

       // Compute SHA-1 hash of canonicalized XML
       MessageDigest digest = MessageDigest.getInstance("SHA-1");
       byte[] xmlBytes = xmlData.getBytes("UTF-8");
       byte[] hashBytes = digest.digest(xmlBytes);

       // Sign the hash
//        PrivateKey privateKey = getPrivateKeyFromCert(cert);
  
     
     KeyStore keystore = KeyStore.getInstance("JKS"); // Or "PKCS12" depending on the type of keystore
     char[] keystorePassword = "keystorePassword".toCharArray();
     String keystorePath = "src/main/resources/keystore.jks";
     keystore.load(new FileInputStream(keystorePath), keystorePassword);

     // Get the private key using the alias and password
     String alias = "keyAlias";
     char[] keyPassword = "keyPassword".toCharArray();
     PrivateKey privateKey = (PrivateKey) keystore.getKey(alias, keyPassword);
     
     
       Signature signature = Signature.getInstance("SHA1withRSA");
       signature.initSign(privateKey);
       signature.update(hashBytes);
       byte[] signedBytes = signature.sign();

       // Print the Base64 encoded signature
       System.out.println("SHA-1 Signature: " + Base64.getEncoder().encodeToString(signedBytes));
   }
//
//    private static PrivateKey getPrivateKeyFromCert(X509Certificate cert) throws Exception {
//        byte[] privateKeyBytes = cert.getPublicKey().getEncoded();
//        PKCS8EncodedKeySpec keySpec = new PKCS8EncodedKeySpec(privateKeyBytes);
//        KeyFactory keyFactory = KeyFactory.getInstance("RSA");
//        return keyFactory.generatePrivate(keySpec);
//    }
}



//-------encrypted data-------
import javax.crypto.Cipher;
import javax.crypto.KeyGenerator;
import javax.crypto.SecretKey;
import javax.crypto.spec.IvParameterSpec;
import java.io.ByteArrayInputStream;
import java.io.FileInputStream;
import java.security.KeyStore;
import java.security.PrivateKey;
import java.security.PublicKey;
import java.security.cert.Certificate;
import java.util.Base64;
import java.util.Enumeration;
import java.util.Properties;
import java.security.SecureRandom;

public class App {
   public static void main(String[] args) throws Exception {
       // Path to your keystore and its password
       String keystorePath = "src/main/resources/keystore.jks";
       String keystorePassword = "keystorePassword";
       String keyAlias = "keyAlias";
       String keyPassword = "keyPassword";
       
       // Load the keystore
       KeyStore keystore = KeyStore.getInstance("JKS");
       try (FileInputStream keystoreInput = new FileInputStream(keystorePath)) {
           keystore.load(keystoreInput, keystorePassword.toCharArray());
       }

       // Retrieve the certificate and private key
       Certificate cert = keystore.getCertificate(keyAlias);
       PublicKey publicKey = cert.getPublicKey();
       PrivateKey privateKey = (PrivateKey) keystore.getKey(keyAlias, keyPassword.toCharArray());

       // Your XML data
//        String xmlData = "<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\">\r\n"
//        		+ "	<SOAP-ENV:Header>\r\n"
//        		+ "	      <wsse:Security mustUnderstand=\"1\">\r\n"
//        		+ "		<wsse:UsernameToken>\r\n"
//        		+ "			<wsse:Username>B000200206</wsse:Username>\r\n"
//        		+ "		</wsse:UsernameToken>\r\n"
//        		+ "        	<wsu:Timestamp>\r\n"
//        		+ "        		<wsu:Created>30</wsu:Created>\r\n"
//        		+ "        		<wsu:Expires>30</wsu:Expires>\r\n"
//        		+ "		</wsu:Timestamp>\r\n"
//        		+ "        	<ds:Signature>\r\n"
//        		+ "          		<ds:SignedInfo>\r\n"
//        		+ "             			<ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/>\r\n"
//        		+ "             				<ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/>\r\n"
//        		+ "          		</ds:SignedInfo>\r\n"
//        		+ "        	</ds:Signature>\r\n"
//        		+ "  	     </wsse:Security>\r\n"
//        		+ "  	</SOAP-ENV:Header>\r\n"
//        		+ "  	<SOAP-ENV:Body/>\r\n"
//        		+ "</SOAP-ENV:Envelope>";
       String xmlData="<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\" xmlns:wsu=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd\"><SOAP-ENV:Header><wsse:Security mustUnderstand=\"1\"><wsse:UsernameToken><wsse:Username>B000200206</wsse:Username></wsse:UsernameToken><wsu:Timestamp><wsu:Created>30</wsu:Created><wsu:Expires>30</wsu:Expires></wsu:Timestamp><ds:Signature><ds:SignedInfo><ds:CanonicalizationMethod Algorithm=\"http://www.w3.org/TR/2001/REC-xml-c14n-20010315\"/><ds:SignatureMethod Algorithm=\"http://www.w3.org/2000/09/xmldsig#rsa-sha1\"/></ds:SignedInfo></ds:Signature></wsse:Security></SOAP-ENV:Header><SOAP-ENV:Body/></SOAP-ENV:Envelope>";

       // Generate AES key and IV
       KeyGenerator keyGen = KeyGenerator.getInstance("AES");
       keyGen.init(128);
       SecretKey aesKey = keyGen.generateKey();
       byte[] iv = new byte[16]; // AES block size is 16 bytes
       SecureRandom random = new SecureRandom();
       random.nextBytes(iv);
       IvParameterSpec ivSpec = new IvParameterSpec(iv);

       // Encrypt XML data using AES
       Cipher aesCipher = Cipher.getInstance("AES/CBC/PKCS5Padding");
       aesCipher.init(Cipher.ENCRYPT_MODE, aesKey, ivSpec);
       byte[] encryptedXmlBytes = aesCipher.doFinal(xmlData.getBytes("UTF-8"));

       // Encrypt AES key using RSA (public key from the certificate)
       Cipher rsaCipher = Cipher.getInstance("RSA/ECB/OAEPWithSHA-1AndMGF1Padding");
       rsaCipher.init(Cipher.WRAP_MODE, publicKey);
       byte[] encryptedAesKeyBytes = rsaCipher.wrap(aesKey);

       // Base64 encode the encrypted data
       String encryptedXml = Base64.getEncoder().encodeToString(encryptedXmlBytes);
       String encryptedAesKey = Base64.getEncoder().encodeToString(encryptedAesKeyBytes);
       String ivBase64 = Base64.getEncoder().encodeToString(iv);

       // Print the encrypted data
       System.out.println("Encrypted XML: " + encryptedXml);
       System.out.println("Encrypted AES Key: " + encryptedAesKey);
       System.out.println("IV: " + ivBase64);
   }
}



properites:
keystorePath=/rest-service/src/main/resources/keystore.jks
keystorePassword=Abc@1234
keyAlias=uat
keyIdentifierType=BinarySecurityToken



pom
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
    <dependency>
    <groupId>org.bouncycastle</groupId>
    <artifactId>bcprov-jdk15on</artifactId>
    <version>1.70</version>
</dependency>
<dependency>
    <groupId>org.bouncycastle</groupId>
    <artifactId>bcpkix-jdk15on</artifactId>
    <version>1.70</version>
</dependency>
<dependency>
    <groupId>org.apache.santuario</groupId>
    <artifactId>xmlsec</artifactId>
    <version>2.3.0</version>
</dependency>
<dependency>
        <groupId>org.slf4j</groupId>
        <artifactId>slf4j-api</artifactId>
        <version>1.7.30</version>
    </dependency>
    <dependency>
        <groupId>org.slf4j</groupId>
        <artifactId>slf4j-simple</artifactId>
        <version>1.7.30</version>
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


inside resources 
keystore.jks



B1RGzemTjbJvYVcjL2Qf1Y7YO+Q=
J2Ru5t/x8z0sjI8VhbM75JQMhpo=


Ki8QF+DtkKhRw3RE5HUGinM2oSlIaahQnDF+Wn6T7e0jZnVuY+6j0++S3MAWiq2VahkYVTX1gOeLCb2s2Uy1uNJ7uhmyrNHRjJaKD1BSm1r9U2MSaz5Ip4D/8kW6kyhxzNVxJkwxutrchQwn+5h/8vsJ8kk4PCoCXXnMMm7cXHSawewr04gjUO6QRtSBLSJ9w425uYMsH2EzNNfj+UTnMW6nmX1HS3/4D3fvvYY9zN/ij91jw7LkB2QBhgHS1KJ/SMAxWklMFKs0jUuFGLsfT1n3imi1utw53867OEnk8wHt0crAPEbbBv0jLr4ZtN2cmG2m8QXsb5Xi8TYPZKfwow==

g3N9KJ/sPqWNcq7wmrrUW115iYcPCr6iu/opDSiV7Aky2JC/rV5vNGliRyW26PN+7EyLSrYJETwybP20yTZ7JsDf4uHqT47ieBgjewXXyapwiB300hTSKrgcX8VmuA/xnzvFPhpXqFd+Fa43cq9P7U44AjRcvtGxFkOBhfQlICjrkPVo8nijZ1yPLn91qvk6T5uSzAuvJZVkZc2JwDZ7q3N1+O916eL9mZYhx4mRApocAwF8o5xoHMlBotv+qJrUvfIk5Tr69QccKUVxGXt4p6kmXyD9YgbAf97lsQ1tondggIWbU1GOmaXdiCDfjq692W5vaSF9oJFHmFlMcvBqQw==


WigGpkuw7GIieecK4+6LAdvyOUg=
LoYo1wzQMjyJ/ZTVH6UQfSPYqkM=



llJ1571/3/SrICJTMhi3IUjzd9ROTY4NbTi/UDO6QUwaUOlGjKG280ne8VTlOnCDBi25mSrzdH8/YF7MfF31i9vHSdCy82M7om26ZgAVoWMwsIGK7WAiWY9E0dzJzJ/eecz4iEAmLrYvLsGe401U0wcRvsbWKyfbKazlm8ZKEKwetUT64NzW/UErRfO+U1d6OooYzRUvxbnsJ4v9g35IRl8Ln3yEhbc3Va+f1XihFG+5uKc1RWa6XhnOF2PXOw9UNGUOrAnQO3jLFfZDaNoX6UvRKXH/DZLcpMMfAQTIsRA6Kb0MMeF+xPos3HLy734bXMRgieQWjnoUbjMeaovr/g==




BHP5iBgglEG/F4fr7o8lMW9l8Cc3Ks64BeaQ/GkRx37JW9OXwExv0hBvKRwA333zDzr7L7jimYI3bd/en+F1EqiAjUTrZpybVVcp6IIOJwL4Sgqu2FPdwvuzN/YIYbZ4uQHrJ72KHEWXyx5GsXMM7jKjUi+vLWG85QmCf2qSyGbY4HxOci7rT1VJcGJl+6O9aCgHj1cdSbYgqs9IFcswIwHRBWrsqmWJIauqcWbDyhssExNRj9BngcHq4aZZiOVrqxK+ZcGXaY3GjOyeprrUqpFJTRHjHytxkYnBFr+z1O7A2jRJTv2k9Kw/xPubroqAYj6EBbTz+36RY5FcTplIw2k5NqzjbXagjjc7n6rbGzWgX5Ev/el04GDMSYLzMMldZlBO9ckRhzywFe+S2l2W3CZ4WrqNqHDGLE935OdfHmmDWnVOLU8Wik3tmaOdo0F6HwIX4aG+h/G8H3XLfEoxC6HBvo9S6xhF/2f2FnRb0f7rDYZrgjgJV4mHa53oG4f2u0mOTw6vx4AGFmdoR/Sinf7slR0u/ZD/+kzUMMHCdT/m7jiwJ6MwnrOYLa58zGz/lyJqDfL+MinMpwzVWUjvXRWOEZqHvmxfgKh7OqmkyQlMOL/Ju/NULtNVUxBOC6WblwPHiPorDQPlWqwU4LbfgFstzwlB4s82Bpb6uYXHw2Rg0equvumb46pMngCZbXVmfXnwk3dbHxoEQ0OZMN8fe4+jOyNMFHQK1Yycg1qOEoCm/eYIbQbG1VVlwa6IIX4NZiXcXAnMvjgpaQSZu5/MC6jWixL6bdHPNCJJ2orJmC7r2cWeKxFCnGSCHA4Q0SP+zdMYd1/WF43m86BIMuB2XwgOm0bArwihjd+sZVTYU0nGKCTbM3n4dsvYeZUBYNcnAd84+hRtHjRTTnPdlHb5+jHLPvHLOoP5IFUadkdDe5vz3hupDMBIU0mHfAEFNz/8

1w/y/B+HzXKnk8jKXWlNTWmGsZEnWb3/n3qcYURTCxu54eOPPUg6iYh/K1otiHn36MQBigb3XrOQLX+tdzBc5j65p4mrp0/7RflOnWdJzLOsjQcB7RuflDe429uR7bFW3UMidMsPiyJfmks3CKm+alc/XNOCSFVXFIRcV/lMLJnFLaDndKRpCCbyVbOvPKvdurLOX594Dtd9MabqH6vIVRqFuGBxNgjzodolZa0eYv+atzVz451tJh4kWDxZo02zKTzWB5sb4a+rCQkOkFthLQVPvstZ0fUhA18kZhXlgRvGvkZnPhC9/qoI9W8B3uyD6yg9nklFeOE3qq+vLTPtzWe+OxTA0Zgtec8M6k2gijqoROmq+LZW3rZpD+M3F3a6pJflM2GMgcIAQ1wTzrlwWHgehyrP57ZJnFhcbjyx2/j8mZgYAk/BHXqNCy1k+EVM5QF9KPjc110XvQUy01vlSlf4HAHaEw1aLBZOKIyJBKpwFkdJngXtgNYMeCHXproTnX3fbviBZOlv9IgmW+N0DkReANi2xgc593m+VK0hwP3NCM/3zl+Zd+AQ8qsmXITbqMcn1sCrtoqZfuqkufz/HdoIwT+jDZEqp7K/w4o728M0YlvG64UYYBltE/g4H+wAcfbdzNDE2pBuOvVSQM3qHPdnRtcllnBq4ugbCMQjLa+sIl189ggTl73IlUgXP3fFTMxHKZkcbLaJnPSL2XszAe3DaYTIxO68E+FqCJOlfo9htpFQ3sWt9l1cteMDaUNAKEv+D21fsSMiGXVgi3wAzYXnCp9wsP7642u/4Sy6OoJ/8oKmdJxdwDkIj1kHYz8ImigUkgAMni6kypbhRzVyOsZ1ksTmi7HbV76hXEuSLQZv4hpEui6HOoObyJU2Hfg3wrrwVV1wPw35tt8VUaY/1cGm6aX7IF4Zt9KbYxHrOzqImsCAsTiF0qyIMBlWdMbBVjYhS9oQldsNdkdSz/8VRhHypGQromjpyhFtmyxTKdoRKMVYC8g/NwvXBm2TYZt6eNiwzufkVs1nF+r0gPRwtRa5fo5FhPAFydltGo9uKG0SGFxXJ26i0ip7UaPzkhZGTV3CBJyaKgXSaCN4r33SPPJidJl1zFBLL8I15yaoNZQns4n3REiCfvx5Gej5EG17/POUf5g3+REIR4KSYc8HC/QmorIObDq+VYj/OVxAIt24r3dRIvTIVlqy2Dk/BGw7azgepVlbCwhciHtKm8Blc97NPChXv6YFC1WvynjwraskWOClDvN+fL/7VIDppdfPWZuSSsHn6dJpBF7NT54Cpd2RxkxznJJ0BxeJptdcheViFZIe2fF9nE8j0aj5caZjB66YmvR5kgNkwblNv9+xMfRD7HpIpJbZCrnyQcTcSKBeSU+N7ka3PAuDTRQY65PJajL9T0tBl9AL6bbO9MYr3Q==


hlFMB9W5i0+mpSeRRYtexkX3PDKibu97Gw4V7QYnVKHdlcZOk/WerJ07+XLB4CwZjvT98RaQeVqSzxtJXZEgL01RTZD0OB5IxaOqRiPxxMH6QbiXb8iDdmUXLnMRK6FH60Udp2XjS0fR/wT/q9x+2Y51mmt435AyGUx60c4PaJiHOKz9qKu2yk0ZuhJXUj4PZhvSqwKRyhJmS8xlyEay6LfBP2qB1ZMPy+XBEewINtYl/mCTuq28XPsq6g+n894Gu1UFWgTDYgm312wvJtdEsKPLNeB4Ug9PIuiiy30XQY+aX6lqkrnt5M2Jwjs5SBUQCsOM1AgAd7ebLi1HFaB99d7iz0gLvYQ5RSSjgFT8+kcTuTz2eT+eEkzOya/3JgOGQBnknLn8ne3iYY+FbqTn0W5An9BmOFzLFJbIQKlwkNthHJuc+qRSSwu8QrGbf8l/pQzBTjGjMH/8/5mO9pZx9wr778c0ijgjbMD9refWIjdsDE25QhZQ6N/g17B7rUN+UxQ2ckm2uLPfzdy8OGmZsSQ1BiTt33BUV2eBoQJhADAlGwAmA0Anxhr6qYaLJbOGnNgjUTOAlmljo4y2bLK9BXM7dkL3TBIzC4St9+QQSiF/g6grVAW5/NnXh4z6JeLk79F6wK6HcisYIwfg2cmS5UznTVuK7WCRH70gubAZtHMLAJELH1z38O0bJDcWNdZbd4+DJyj5DOD6gwhU8W63w2T79SwvsEpYS/AMAfsey0jK7ILNMm6t+EYsFqAABUD/oZT405rXKSQ/ksqTMV0eRXdOJrqft1IxX2hUEnKv3XneZVqQcQuO9NofUYhkh9fm6HOGCF1iEyVArRghDWKutIo50PZgKY2m79+5n5K357uEFIMIzXMH44srP1Bon5QBs9ncFG7jJmtb+HvIP6d12/7iiBMqqGiQls3OXPMkZnfBURDbhATZCx+X+OZIea8Nz/9Vx8G1+LnGowzlNnVpjy/qkLLWc2oqXFttPX0JKhQxLLnpljDfCzzLbtDlSkwZA8UCUXmkKmyORcf/6tWR+Qk3O04zhX1MeLwzdPxUtBiPLwd0VLy6rZ/oebBXtZNnZ2pdt9yIZ30upDbaR+Pq0dUkNKyjNbgpEG2UC4jQrZ2YaEx7pJjDNqw1vvngqM4z5JhRIYbK7cRSZHUMYVoj2LFMog+3yl9HwO4N4cfmp+o+vjbMRgdkAkBkbSb4X9BIpryBrGdDn66GFnc75Iq07/tWaaYsH27aRE94xD6As2KtQhQvmdST37SzBZn/QPjyi1v3C9I2z6yXHsiGh7v2aPsgpJRxdp24pmJMTW03TP8KoYzGE8lLLdG04SeGkQXa

mjBJP+1z8ff8m58xDtDuP/0Ei8ZpfPWhpXb8qT7p5OljOx8Kw5RnftXUNsIv8TmM0HhA8KHRXudL/fDdTmN7/6Q5nL0pxMmXUaJyKcO2O/Xsr0rGU53bnHycIprQMCngA6mzzWQZ/Lsjc16uXRzUm3rnlKyiG8omWIubU1WuRWZQSP28OcPB3Lexd8HLwb+iwWweDOEAKKr1d3wRiUL/csdKPM2Fc4SeSSmm4mAhqjplUVDsPIiTsQsf4XSE4+42oyqq+8al2jJBj+svtQwOyF+uvNkaWfLrY+dhPSCbwfTJ1yEVr0yglZy8wPBDSe6ag8YLpVoZKqHi0Rn0VRGyBdsrLrfBZpa3j4cU4+NyiCW0/gfojNrShnGNgv4bQuc8AOtb2SD/oxjbFI5im4TS+YhOAnMIzbym5gWcBc9khOpDv60a8coChiVNlCq8q6HWiEc+5oownLXWOHfFulScx2Yz5Th/34msDiEDXPQGzOMhnIrF1B1sqK4oCkKAZCregIVMX7EZA3JkvDVAJaTDGHfQi7q9xAYae1Vey7hUHMSfZxdE+FvEzXUYa8xhUgnaEKp4IINq5svifbKzdoYK9XxokBjKGCUt7z6q/7X+hsKaG48TerUipptH8oOqVKAumXJY1YCKPR0HBgXCGtXoaMYt/kO3L1fWzB3txrYe0vBW1waqR21P40rizDbxxO+xXfjDnrMlRG3M30ZKH8PBU6pnCVpFZ1VGEQOKYjYCUz1P9QZ4Rk+3rtI5nZBQ9wdqgQiFexaszulKJ7Yhntze7j4JU39YtNxFI1wtWlEFSL7DQkGcygSu/c/RKT76YR6773caYBZ6PmhdC+0zz9w7VhTh6jFsHGvMTH6mcAKaWzE3g6c7zNPRuCI22kQFs0LGV62PV07qytDekYLeb11mIUY0C0LjC3j/F9xdrhmcpK1AhRx5aQ55okAuBXtBuiI+jt+SsiYB05wpDPrXXIQ6i7ernQZ/PgL8SfjTLNqigQoOeJ1hq27OaRS1QAF9TLYD1MJDF/7dZpvav29PnMdaEOxZHjySC0jksY1M8OvxVvYToJ3HEbyI+jYxR8VOX8v7v+fzIFW26QsklyWhKY++Eg==

OkyMipyMSTYIDbQVsiVAzToLCoKZcow1yJmw/RBIW4bgCi1H5FvyAfI+I9aJYEqRru7LWTSSKzi4ozdFwBUbAZUIwS3lPureEX6bM9t035q92tBrl3eMiJLZltrhoADp1jE/IFUJEha4r73KXEUhlt3IUyixvTIgo/MkjygxipAgRVDqeomLeyX3pxFjow1aWjoI/5yeBhy22Yodu/mvHEG63km44Me+Fg71fWiakS+UX2pmHtlqtj4oPxz35OSRgbd0zNA3LucANLeEZ4Nt6AsRLkV9lYxZSJJUmGWwGcTWYAUoGABBXxiF8cyPdhcszT+WpzFnFlK02gNpyax+AQ==


6mIRjLJ8Hi857mtUQUx4NgLqzlewmkptugb1pYWWnemLev7I0iRe4pZwwz3SNFcxP/TWU2CxkNAxvUrJW728M9ao1ioLXDUYyTdOsXxEDv2ugFmOKGJZAeHUJATAMitd8dTSxT67YMxJjMmwwp1w0rsexUgqGRNu7LhtdaGrdbOkWvl/8FQji+UGPS8niFBlg6Vti3vpe22OjywlnWXJQEiO7Q9+hRdx/EYbc3JAXhmFsCUKV5gw1YrLyOB3Q29xXHphj3pzHK1zTYhYI0+OQQ==


-----BEGIN CERTIFICATE-----
MIICtDCCAZygAwIBAgIGAY+VvpDSMA0GCSqGSIb3DQEBCwUAMBsxGTAXBgNVBAMM EFRlc3QgQ2VydGlmaWNhdGUwHhcNMjQwNTIwMTEyNDA1WhcNMjUwNTIwMTEyNDA1
WjAbMRkwFwYDVQQDDBBUZXN0IENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEF AAOCAQ8AMIIBCgKCAQEA0xG1w6kUTmlN6sk9poEOjeBbfALT2mIfC/rsDy8a+M1T RfMv0DFay6ycDHPhcOIQn25Ub+MOkcGzpOD1V7X2/VDwaDlSiqfDBS/1pgz9m5Z2 fFlLjPI0B73RkfYQrM99ejPQobJKsiwATQhcx0yFJKeimT6Nk9wYo+VG+d+/Sed9 N4cMrD+S0/CvRaXx7lkdeCmLtWLIQwEKmagK/qk9A/n+fFypdXMLgXuU0cnz6PRb 8GpByNX+EqZ3XBgJmHu4OJuGyEGYhOII8Q16BQZczR9CwV0gZHBjycPWAjcxFYau
CsZK59SNtXK09q7p8wud3f4NJC+7I6SGTF6LNKEmHQIDAQABMA0GCSqGSIb3DQEB
CwUAA4IBAQBnFU091UabnP/wu+8w/2pNpVWvgqhhohFQpBZKhz0yATxYNfz3U1kp
nQto8+LvFnxsxLCE0VZKeZmuk3y7OD0SxksWW6Xq/YwRjcLdbPnk3IWLuf62lPTo O25rYWmKZBiNIgiCmVNQKs0s71ZC74umP3l7GX9F3QTwkiQxpUzhRmf/HV9fj1k2 T/v0JtB56e7fiffLZ4yTE6pWEabQfBLHAsXKnBDIZtTGK04FKrkmKmQqhMiNOvTR
5mOdeAShP7P3fMEwxQxsVeJHvGzgQ+7njBDjrWxNaVA7t6IEkiPezdKw6RKv65FR
Nm/udaOWAi2+C3etvXEoQswBk4vRWeY/
-----END CERTIFICATE-----


rest-service
├── src
│   ├── main
│   │   └── java
│   │       └── com
│   │           └── example
│   │               └── rest_service
│   │                   └── App.java
│   └── test
│       └── java
│           └── com
│               └── example
│                   └── rest_service
│                       └── AppTest.java
|-jre system library
   |-(its related jar files)
|-maven dependencies
   |- hamcrest-core-1.3.jar
   |-junit-4.11.jar
|___src
    |-main
    |-test
├── pom.xml
└── target
