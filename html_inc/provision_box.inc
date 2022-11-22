<section class="provision_box">
                <form class="provision_bg">
                    <fieldset class="provision_wrap">
                        <h2 class="provision_txt">PROVISION <br>&<br> SPARE/STORE</h2>
                        <div class="txt_wrap">
                            <div class="sear_box">
                                <select name="location" class="location_box" id="location_box" onchange="locationChange()">
                                    <option value="">지역 선택</option>
                                    <option value="korea">국내</option>
                                    <option value="asia">아시아</option>
                                    <option value="america">아메리카</option>
                                    <option value="europe">유럽</option>
                                    <option value="africa">아프리카</option>
                                    <option value="oseania">오세아니아</option>
                                </select>
                                <select name="location_detail" class="location_detail">
                                    <option value="">세부 지역</option>
                                </select>
                                <input type="hidden" value="" class="final_location_box" name="final_location">
                                    <input type="hidden" value="" class="final_location_detail" name="final_location_detail">
                                        <select name="product" id="product_box">
                                            <option value="">제품 선택</option>
                                            <option value="provision">주부식</option>
                                            <option value="spare">기부속</option>
                                            <option value="store">선용품</option>
                                            <option value="bilge">빌지처리</option>
                                            <option value="cleaning">선창클리닝</option>
                                            <option value="repair">선박수리</option>
                                            <option value="sludge">슬러지</option>
                                            <option value="agency">대리점</option>
                                            <option value="spro">SPRO 계약</option>
                                            <option value="garbage">쓰레기</option>
                                            <option value="fw">청수</option>
                                            <option value="onboard_pay">선용금</option>
                                            <option value="tex_free">면세품</option>
                                            <option value="private">개인물품</option>
                                            <option value="laundry">세탁물</option>
                                            <option value="etc">기타</option>
                                        </select>
                                        <input type="hidden" value="" class="final_product" name="final_product">
                                        <div class="box_wrap">
                                        <input type="text" placeholder="검색어를 입력해주세요" class="search_box"><svg class="provision_glass"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                            </svg>
                            </div>
                            <button class="provision_search_btn">검색</button>
                            </div>
                        </div>
                        <ul class="bg_icon">
                            <li class="company"><a href="#" class="company_icon">
                                    <figure class="fig1"><img src="/web_project/images/company.png" alt="업체조회">
                                        <figcaption class="figcap1">업체조회</figcaption>
                                    </figure>
                                </a></li>
                            <li class="check"><a href="#" class="check_icon">
                                    <figure class="fig2"><img src="/web_project/images/check.png" alt="배송조회">
                                        <figcaption class="figcap2">배송조회</figcaption>
                                    </figure>
                                </a></li>
                            <li class="reg"><a href="provision_reg.html" class="reg_icon">
                                    <figure class="fig3"><img src="/web_project/images/reg.png" alt="배송조회">
                                        <figcaption class="figcap3">업체등록</figcaption>
                                    </figure>
                                </a></li>
                            <li class="guide"><a href="provision_guide.html" class="guide_icon">
                                    <figure class="fig4"><img src="/web_project/images/guide.png" alt="이용안내">
                                        <figcaption class="figcap4">이용안내</figcaption>
                                    </figure>
                                </a></li>
                        </ul>
                    </fieldset>
                </form>
            </section>