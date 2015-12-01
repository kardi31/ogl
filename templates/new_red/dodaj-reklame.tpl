{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}



	<div class="left">
            <h2>Dodaj reklame</h2>
            {if isset($smarty.get.msg2)}
                
                <div style='font-size:20px;font-weight:bold'>{$smarty.get.msg2}</div>
            {/if}
            Cennik reklam : <br />
            Reklama na górze strony(728x90px) - {$ust['reklama_top']} kredytów <br />
            
            Reklama po prawej stronie nad menu (210x210px) - {$ust['reklama_right']} kredytów <br />
            
            Reklama na dole strony (300x250px) - {$ust['reklama_bottom']} kredytów. <br />
            
            <br />
            Reklama jest wyświetlana przez tydzień. Akceptowany format to jpg,png i gif.
            <br /><br />
            <form action="/upload-reklame.php" method="POST" enctype="multipart/form-data">

                <table>
                <tr>
                <td><b>Nazwa</b></td>
                <td><input type="text" name="name" style="width:250px;"></td>
                </tr>
                <tr>
                <tr>
                <td><b>Adres url</b></td>
                <td><input type="text" name="website" style="width:250px;"></td>
                </tr>
                <tr>
                <td valign="top"><b>Pozycja</b></td>
                <td>
                <select name="position">
                    <option value="top">Górna reklama (728x90px)</option>
                    <option value="right">Reklama w prawym panelu nad menu (210x210px)</option>
                    <option value="bottom">Reklama na dole strony (300x250)</option>
                </select>
                <br /><br />
                </td>
                </tr>
                <tr>
                <td valign="top"><b>Reklama:</b></td>
                <td><input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /><input name="plik1" type="file"/> <br><small></small></td>
                </tr>

                </table>
                <input type="submit" value="Dodaj" name="addcatg">
            </form>

</div>

{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}