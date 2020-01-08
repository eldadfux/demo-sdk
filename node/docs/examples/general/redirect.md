const sdk = require('node-appwrite');

// Init SDK
let client = new sdk.Client();

let general = new sdk.General(client);

client
;

let promise = general.redirect();

promise.then(function (response) {
    console.log(response);
}, function (error) {
    console.log(error);
});