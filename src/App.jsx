import { useEffect, useState } from "react";
import illustration from "./assets/illustration.svg";
import reactLogo from "./assets/react.svg";
import styles from "./App.module.css";

function App() {

    return (
        <main className={styles.main}>
            <section className={styles.container}>
                <h1>Under Migration</h1>
                <img src={illustration} alt="Under Maintenance" />
                <p>
                    This site is currently being migrated
                    <br />
                    from <strong>raw HTML/CSS/JS</strong> to{" "}
                    <img src={reactLogo} alt="" height={18}/>
                    <strong> React</strong>
                </p>

                <p>Please visit again later</p>
            </section>
        </main>
    );
}

export default App;
