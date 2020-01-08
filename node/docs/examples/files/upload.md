const sdk = require('node-appwrite');

// Init SDK
let client = new sdk.Client();

let files = new sdk.Files(client);

client
;

let promise = files.upload('[]', null, [], document.getElementById('uploader').files[0]);

promise.then(function (response) {
    console.log(response);
}, function (error) {
    console.log(error);
});