<div class="row">
            <div class="row formtitle">
                <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
            </div>
            <div class="row formcontent">      
                <div class="row mb10 formdsloai" >
                    <table>
                        <tr>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                        <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            echo "<tr>
                                    <td>$madm</td>
                                    <td>$tendm</td>
                                    <td>$countsp</td>
                                    <td>$maxgia</td>
                                    <td>$mingia</td>
                                    <td>$avggia</td>
                                </tr>";
                        }

                        ?>
                        
                        
                        
                    </table>

                </div>
                <div class="row mb10" >
                        <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                    
                </div>
            </div>
        </div>        
</div>