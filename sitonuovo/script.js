function choose(){
var x = Math.random();
    var result = (Math.floor(x * 25));
    var message = 'coming soon in';
    var d = new Date();
    var date =  d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

    var name = document.getElementById('chy').innerTEXT = alert( message + ' ' +  result + ' DAYS' + ' ' + date);

    return name;
}