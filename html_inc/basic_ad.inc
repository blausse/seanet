    <section class="basic_ad">
                <h2>일반 구인광고</h2>
                <div class="ad">
                    <?php while($array = mysqli_fetch_array($result)){?>
                        <?php
                        $nDate = date("Y-m-d");
                        $valDate = $array['ai_endDate'];
                        $leftDate = intval((strtotime($nDate)-strtotime($valDate)) / 86400) + 1; 
                        $i = $i + 1;
                        $page = ceil($i / $list_num);
                    ?>
                    <a href="/web_project/ad/list.php?page=<?php echo $page;?>&n_idx=<?php echo $array['idx'];?>#bl<?php echo $array['idx'];?>">
                        <div class="ad<?php echo $array['idx'];?>" id="ad_box">
                            <img class="ad_img" src="./data/<?php echo $array['c_logo_name'];?>" alt="">
                            <div class="ad<?php echo $array['idx'];?>_bg" id="ad_text">
                                <span><?php echo $array['c_name'];?></span>
                                <span class="dd"><?php echo $array['ai_title'];?></span>
                                <span class="day">D-<?php echo $leftDate;?></span>
                            </div>
                        </div>
                    </a>
                    <input type="hidden" value="<?php echo $i;?>">
                    <?php };?>
                </div>
                <p class="ad_more">펼치기></p>
            </section>