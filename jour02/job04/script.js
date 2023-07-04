const textarea = document.getElementById("keylogger");

document.addEventListener("keydown", function (event) {
        const key = event.key.toLowerCase();

        if (/[a-z]/.test(key)) {
                if (document.activeElement === textarea) {
                        textarea.value += key;
                } else {
                        textarea.value += key;
                }
        }
});
