var url = "https://api.coinbrain.com/public/coin-info";

var xhr = new XMLHttpRequest();
xhr.open("POST", url);

xhr.setRequestHeader("Content-Type", "application/json");

xhr.onreadystatechange = function () {
   if (xhr.readyState === 4) {
      console.log(xhr.status);
      console.log(xhr.responseText);
   }};

var data = `{
 "56": [
  "0x7130d2a12b9bcbfae4f2634d864a1ee1ce3ead9c",
  "0xe9e7cea3dedca5984780bafc599bd69add087d56",
  "0x8ac76a51cc950d9822d68b83fe1ad97b32cd580d"
 ]
}`;

xhr.send(data);
