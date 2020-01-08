const sdk = require('node-appwrite');

// Init SDK
let client = new sdk.Client();

let foo = new sdk.Foo(client);

client
;

let promise = foo.post('[]', null, []);

promise.then(function (response) {
    console.log(response);
}, function (error) {
    console.log(error);
});