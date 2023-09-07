<?php

?>

<a href="index.php?action=create"> Them moi </a>




</table>
<h1 class="h3 mb-2 text-gray-800">BÀI VIẾT</h1>
<p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>stt</th>
                        <th>user_id</th>
                        <th>title</th>
                        <th>content</th>
                        <th>ACTION</th>
                    </tr>
                    <!-- Bắt đầu lặp -->
                    <?php
                    foreach ($items as $r) :
                        // echo '<pre>';
                        // print_r($r);
                        // die();
                    ?>
                        <tr>
                            <td><?php echo $r['id']; ?> </td>
                            <td><?php echo $r['email']; ?> </td>
                            <td><?php echo $r['title']; ?> </td>
                            <td><?php echo $r['content']; ?> </td>






                            <td>
                                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">Sua</a> |
                                <a href="index.php?action=show&id=<?php echo $r['id']; ?>">Xem</a> |


                                <a onclick=" return confirm('Are you sure ?'); " href="index.php?action=destroy&id=<?php echo $r['id']; ?>">Xoa</a>
                            </td>
                        </tr>
                        <!-- Kết thúc vòng lặp -->
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>