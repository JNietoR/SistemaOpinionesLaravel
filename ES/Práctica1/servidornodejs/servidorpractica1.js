
const http = require("http");
const host = 'localhost';
const port = 8080;

console.log("Servidor arriba");
const requestListener = function (req, res) {
    res.writeHead(200);
    res.end("Mi primer servidor");
};

const server = http.createServer(requestListener);
server.listen(port, host, () => {
    console.log(`Server is running on http://${host}:${port}`);
});
