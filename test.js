var glob = require("glob");

glob("./**/*/.js", {}, (err, files) => {
    console.log(files);
});
