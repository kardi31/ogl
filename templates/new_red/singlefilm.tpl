{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
    <h1 class="ng">{$row['fo_fd']}</h1>
    {if !$logged}
    <center>
        <br><img src="images/lock.png"><br><br>
        <b>Aby wykupić dostęp do danego filmu musisz się zalogować. <a href="register/">{$lang[62]}</a>. </b>
    </center>
    {else}
        {if !$hasAccess}
            <div class="singlefilmRow">
                    <div class='small'>Dodał(a): <a href="profil/{$row['user_loginn']}/{$row['fo_id']}"><b>{$row['user_login']}</b></a> <br /> Dnia: {$row['fo_data']}
                        <br />
                    </div>
                    <div>

                            <div>
                                {if $row['fo_custom_file']!=1}

                                    <img src="http://i2.ytimg.com/vi/{$row['fo_fm']}/default.jpg">

                                {else}
                                    {if !$row['fo_thumb']}
                                        <video width="120" height="90" datarel='{$row['fo_id']}' dataid='{$row['fo_user']}'>
                                            <source src="/upload/filmy/{$row['fo_user']}/{$row['fo_fm']}" type="video/mp4">
                                            <source src="/upload/filmy/{$row['fo_user']}/{$row['fo_fm']}" type="video/ogg">
                                            Your browser does not support the video tag.
                                          </video>
                                        <canvas></canvas>
                                    {else}
                                        <img src='/upload/filmy/{$row['fo_user']}/{$row['fo_thumb']}' style='width:120px;height:90px;' />
                                    {/if}
                                {/if}
                                <div class='description'>{$row['fo_fd']}</div>                                    
                            </div>
                    </div>
            </div>
            <div class='kupDostep'>
                {if isset($smarty.get.msg)}

                    <div class='msgInfo'>
                        {$smarty.get.msg}
                    </div>

                {/if}
                <form method='POST' action='/wyk/mov-access.php'>
                        <br /><br />
                    Cena: <b>{if $row['fo_cena']!=0} {$row['fo_cena']} kredytów {else} Darmowy {/if}</b> <br />
                        <br />
                    <input type='hidden' name='id' value='{$row['fo_id']}' />
                    <input type='submit' value='Kup dostęp do filmu' />
                </form>
            </div>
        {else}
            <div class="singlefilmRow">
                <div class='small'>Dodał(a): <a href="profil/{$row['user_loginn']}/{$row['fo_id']}"><b>{$row['user_login']}</b></a> <br /> Dnia: {$row['fo_data']}
                    <br />
                </div>
                <div>

                <div>
                    {if $row['fo_custom_file']!=1}
                        <iframe width="500" height="360" src='http://www.youtube.com/embed/{$row['fo_fm']}'></iframe>

                    {else}
                            <video controls width="500" height="360" datarel='{$row['fo_id']}' dataid='{$row['fo_user']}'>
                                <source src="/upload/filmy/{$row['fo_user']}/{$row['fo_fm']}" type="video/{$row['fo_file_type']}">
                                <source src="/upload/filmy/{$row['fo_user']}/{$row['fo_fm']}" type="video/ogg">
                                Your browser does not support the video tag.
                              </video>
                            <canvas></canvas>

                    {/if}
                    <div class='description'>{$row['fo_fd']}</div>                                    
                </div>
                </div>
            </div>
        {/if}
    {/if}
</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}