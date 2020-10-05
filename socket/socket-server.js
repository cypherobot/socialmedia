var app = require('express')();
var http = require('http').createServer(app);
var io = require('socket.io')(http);

let users = [];

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

io.on('connection', (socket) => {
  socket.on('custom_socket_id', (user_id) => {
    users[`user_${user_id}`] = socket.id;
    socket.user_id = user_id;
  });

  socket.on('messenger', (message) => {
    var to_user = users[`user_${message.receiver}`]
    io.to(to_user).emit( 'messenger', message );
  });

  socket.on('disconnect', () => {
    delete users[`user_${socket.user_id}`];
  });
});

http.listen(3000, () => {
  console.log('listening on port 3000');
});