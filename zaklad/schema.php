<div class="model" id="model">
    <div class="formy">
        <span class="close" style="color: black" onclick="ukoncit()" >&times;</span>
        <form action="adminlog/blog_action.php" method="post" enctype="multipart/form-data">
            <div class="rowy">
                <div class="col-250">
                    <label for="atitulok">Titulok</label>
                </div>
                <div class="col-750">
                    <input val type="text" id="atitulok" name="atitulok" placeholder="Titulok" required>
                </div>
            </div>
            <div class="nici">
                <div class="col-250">
                    <label for="idcka">Titulok</label>
                </div>
                <div class="col-750">
                    <input val type="text" id="idcka" name="idcka" placeholder="Titulok" >
                </div>
            </div>
            <div class="rowy">
                <div class="col-250">
                    <label for="meno">Meno</label>
                </div>
                <div class="col-750">
                    <input type="text" id="meno" name="meno" placeholder="Zadaj meno autora" required>
                </div>
            </div>
            <div class="<?php if($_SESSION['update']) {
                echo "nici";
            } else {
                echo "rowy";
            }?>">

                <div class="col-250">
                    <label for="myFile">File load</label>
                </div>
                <div class="col-750">
                    <input type="file" id="myFile" name="myFile" >
                </div>
            </div>
            <div class="rowy">
                <div class="col-250">
                    <label for="tag">Tag</label>
                </div>
                <div class="col-750">
                    <input type="text" id="tag" name="tag" placeholder="Zadaj tag" required>
                </div>
            </div>
            <div class="rowy">
                <div class="col-250">
                    <label for="typ">Typ</label>
                </div>
                <div class="col-750">
                    <input type="text" id="typ" name="typ" placeholder="Zadaj typ" required>
                </div>
            </div>
            <div class="rowy">
                <div class="col-250">
                    <label for="subject">Text</label>
                </div>
                <div class="col-750">
                    <textarea id="subject" name="subject" placeholder="Napis nieco.." style="height:200px" required></textarea>
                </div>
            </div>
            <div class="rowy">
                <input class="sub" type="submit"  value="Submit">
            </div>
        </form>
    </div>
</div>
