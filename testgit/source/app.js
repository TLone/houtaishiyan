/**
 * @Author : ֹˮ
 * @Timestamp : 2017-03-01
 */
var d1 = require("deviceone");
var app = d1.sm("do_App");

app.on("loaded", function () {
	app.openPage("source://view/index.ui");
});
