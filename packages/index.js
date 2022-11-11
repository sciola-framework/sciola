try {
    const sciola = require("sciola");
    console.log("This package is already installed!");
} catch (error) {
    if (error.code === "MODULE_NOT_FOUND") {
        console.clear();
        console.log("Installing packages...");
        const exec = require("child_process").exec;
        exec("npm install sciola", {
                cwd: __dirname
            }, (error, stdout, stderr) => {
            exec("npx sciola-framework install", {
                    cwd: __dirname + "/node_modules/sciola"
                }, (error, stdout, stderr) => {
                console.clear();
                console.log("Done!");
            });
        });
    }
}
