var req = new XMLHttpRequest();
req.open('GET', 'https://www.btc.com/block?date=2021-05-17', false);
req.send(null);
if(req.status == 200)
   dump(req.responseText);