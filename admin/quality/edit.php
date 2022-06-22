<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/template/admin/inc/leftbar.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/template/admin/inc/header.php';
?>

<div class="container-fluid py-4">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Manage quality</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Place</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <?php
                                $query="SELECT * FROM quality";
                                $result=$mysqli->query($query);
                                $stt=0;
                                while($arQuality=mysqli_fetch_assoc($result)){
                                    $stt++;
                                    ?>
                                <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs text-secondary mb-0"><?php echo $stt;?></p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs text-secondary mb-0"><?php echo $arQuality['description'];?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0"><?php echo $arQuality['place'];?></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span ><?php echo $arQuality['time'];?></span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs"><?php echo $arQuality['detail'];?></span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="" class="text-secondary font-weight-bold text-xs" >
                                            Edit
                                        </a>
                                        <a href="" class="text-secondary font-weight-bold text-xs" >
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php };?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/template/admin/inc/footer.php';
?>


