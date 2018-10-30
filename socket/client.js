<script src="/socket.io/socket.io.js"></script>
<script src="https://cdn.socket.io/socket.io-1.3.7.js"></script>

io(url:String, opts : Object):Socket

var socket = io();

io.on("connect", fn);
io.on("error", fn);
io.on("disconnect", fn);

io.on("reconnect" fn);
io.on("reconnectiong", fn);
io.on("reconnect_error", fn);
