{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
    <h1 class="ng">Filmy</h1>
        {foreach from=$rows key=k item=row}
            <div class="filmyRow">
                <a href='/filmy/{$row['fo_id']}'>
                    <strong>{$row['fo_fd']}</strong>
                </a>
                    <div class='small'>Dodał(a): <a href="profil/{$row['user_loginn']}/{$row['fo_id']}"><b>{$row['user_login']}</b></a> <br /> Dnia: {$row['fo_data']}
                        <br />
                        Cena: <b>{if $row['fo_cena']!=0} {$row['fo_cena']} kredytów {else} Darmowy {/if}</b>
                    </div>
                    <div>
                        
                <a href='/filmy/{$row['fo_id']}'>
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
                </a>
                    </div>
            </div>
                            
                                    {if $k%3==2} <div class='clearfix'></div>{/if}
        {/foreach}
</div>
        <style>
            .filmyRow .description{
                margin-top:8px;
                padding-left:2px;
                padding-right:2px;
            }
            .filmyRow strong{
                font-size: 14px;
                display: block;
                margin: 4px 0px;
            }
            
            .filmyRow div.small{
                font-size:11px;
                margin-bottom:5px;
            }
            .filmyRow{
                width:33%;
                float:left;
                margin-bottom:20px;
            }
            .clearfix:after,.clearfix:before{
                display:block;
                clear:both;
                content:" ";
            }
            
        </style>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}