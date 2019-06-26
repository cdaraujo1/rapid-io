The tracking function is running under a NodeJS server responding through JSON responses that are sent from the server.

Above are instructions to backend
For posting an object:
Should go to http://app.rapid.io/api/tracking/new
*POST method with clientID

For tracking an object:
Should go to http://app.rapid.io/api/tracking/whereis/:id
*GET method

For tracking a costumer's object:
Should go to http://app.rapid.io/api/tracking/custumer/:costumerid
*GET method

For update an object status:
Should go to http://app.rapid.io/api/tracking/update
The ID are being parsed in the body POST.
*POST method with clientID

For deleting an object:
It is an automatic function that runs each 3 months after the package is delivered (or devolved). It goes to http://app.rapid.io/api/pack/delete/:id
*DELETE method with clientID

*future