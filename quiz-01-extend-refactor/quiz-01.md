# Update and refactor existing code

The code below is written in no particular OO language, while this may resemble a language it is not in any actual programming language.

You have been asked to extend the code below to introduce a new record with id 5 (dtl.

getClientRecordId() is 5). Before this requirement the call to getClientRecordId() could never return 5.  

You have been tasked with updating the code base while adjusting and improving the overall code.

While doing this you come across the code below, being new to the system you do not know all the details but you have been assured that you can adjust and reactor it. Please modify it in order to make it function under the condition that getClientRecordId() can now return a value of 5.

Hint 1: If all you are doing is adding 

dtl.getClientRecordId() == 5 to the if statement you are not doing it correctly
Hint 2: This code is no specific OO language
Hint 3: You do not want to break any existing logic (especially when getClientRecordId() returns any of the old values)

```java
import everything.*;

class DoesWhat {

    public void DoStuff(Client client, Map clientToFlagMap, ClientSummary sum) {
        for (int d = 0; d < client.getClientDetails().size(); ) {

            ClientDetail dtl = client.getClientDetails().get(d);
            if (dtl.getClientRecordId() == 0 || dtl.getClientRecordId() == 2 
                                                                   || dtl.getClientRecordId() == 4) {
                sum.markAsRegistered(true);
                if (dtl.getClientLocationId() != null && dtl.getClientTierId() != null 
					                                     && dtl.getClientCompanyTierId() != null) {
                    sum.setIsPrimary("Y");
                    clientToFlagMap.put(dtl.getClientSecondaryId(), "Y");
                } //end if

            } else {

                if (dtl.getClientLocationId() != null && dtl.getClientTierId() != null 
					                                     && dtl.getClientCompanyTierId() != null) {
                    sum.markAsRegistered(true);
                    sum.setIsPrimary("Y");
                    clientToFlagMap.put(dtl.getClientSecondaryId(), "Y");
                } else {
                    sum.markAsRegistered(true);
                } //end if

            } //end outer if
            break;
        } //end for
    } //end DoStuff
} // end class
```

## Update and refactor existing code

[Solution](./solution-01.java)


## Optionally, explain your solution

1. Initial Refactor:
- The first refactor modifies the code by removing the unnecessary loop and replacing it with a single if statement to check if the client details list has elements.
- The logic to check if the client record ID is valid is removed because the subsequent logic will always be executed if the record ID is valid.
- The code is also refactored to improve readability by abstracting the logic to check if the client is primary and setting the primary flag.

2. getClientRecordId() Refactor:
- The final refactor introduces modifications to the ClientDetail class.
- The validClientRecordIds array is updated to include the value 5.
- The getClientRecordId() method is modified to return the record ID based on the clientNumber index from the validClientRecordIds array.

3. Final Solution:
- The final solution combines the refactored DoesWhat class with the modified ClientDetail class.
- The DoesWhat class is refactored to remove the loop, improve readability, and maintain the previous logic intact.
- The ClientDetail class is modified to include the new record ID (5) in the list of valid client record IDs and adjust the getClientRecordId() method accordingly.
