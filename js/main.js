var client=new ZeroClipboard(document.getElementById("copy-button"));client.on("ready",function(a){client.on("aftercopy",function(b){b.target.style.display="none"})});