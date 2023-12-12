// ----------
//    定数
// ----------
/**
 * スマホ画面サイズ
 */
const SP_BREAKPOINT = 926;

// ----------
//　初期処理
if (!isSp()) {
    let body = document.body;
    body.innerHTML = `このアプリはモバイル版専用です
    </br>
    開発ツール(F12)で画面の横幅を${SP_BREAKPOINT}px以下に設定してリロードしてください`;
}

let logoutButton = document.getElementById("logout");
if (logoutButton) {
    logoutButton.addEventListener("click", function() {
        if (confirm("ログアウトしますか?")) {
            document.logout.submit();
        }
    });
}

// ----------

/**
 * 画面がスマホサイズであるか判定
 */
function isSp() {
    return window.screen.width <= SP_BREAKPOINT;
}