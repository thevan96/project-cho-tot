<?php
namespace Controller;

use Core\Controller;
use Core\Database;

class RealestalController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = Database::get(
            "SELECT RealEstale.idRealEstale as id,title, value, RealEstale.address, TypeOwn.name as 'typeown', Purpose.name as 'purpose'  FROM RealEstale INNER JOIN User ON RealEstale.idUser = User.idUser
                INNER JOIN Purpose ON RealEstale.idPurpose = Purpose.idPurpose
                INNER JOIN TypeOwn ON RealEstale.idTypeOwn = TypeOwn.idTypeOwn"
        );
        return $this->renderView('realestal/index', $data);
    }

    public function add()
    {
        if (isset($_SESSION['idUser'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'purpose' => (int) $_POST['purpose'],
                    'title' => trim($_POST['title']),
                    'address' => trim($_POST['address']),
                    'typeOwn' => (int) $_POST['typeOwn'],
                    'imageUpload' => $_FILES['imageUpload'],
                    'value' => intval(trim($_POST['value'])),
                    'area' => intval(trim($_POST['area'])),
                    'description' => trim($_POST['description']),

                    'purposeErr' => '',
                    'titleErr' => '',
                    'addressErr' => '',
                    'typeOwnErr' => '',
                    'imageUploadErr' => '',
                    'valueErr' => '',
                    'areaErr' => '',
                    'descriptionErr' => ''
                ];

                if ($data['purpose'] === 0) {
                    $data['purposeErr'] = 'Bạn chưa chọn mục đích đăng tin';
                }

                if (empty($data['title'])) {
                    $data['titleErr'] = 'Bạn chưa nhập tiêu đề';
                }

                if (empty($data['address'])) {
                    $data['addressErr'] = 'Bạn chưa nhập địa chỉ';
                }

                if ($data['typeOwn'] === 0) {
                    $data['typeOwnErr'] = 'Bạn chưa chọn bạn là ai';
                }

                if (count($data['imageUpload']['name']) < 3) {
                    $data['imageErr'] = 'Bạn chưa nhập tối thiểu 3 ảnh';
                } elseif (is_null($data['imageUpload']['name'])) {
                    $data['imageErr'] = 'Bạn chưa nhập ảnh';
                } else {
                    $allowed = array('png', 'jpeg', 'svg');
                    $size = count($data['imageUpload']['name']);
                    for ($i = 0; $i < $size; $i++) {
                        $ext = pathinfo(
                            $data['imageUpload']['name'][$i],
                            PATHINFO_EXTENSION
                        );
                        if (!in_array($ext, $allowed)) {
                            $data['imageUploadErr'] =
                                'File upload không hợp lệ';
                            break;
                        }
                    }
                }
                if ($data['value'] === 0) {
                    $data['valueErr'] = 'Bạn chưa nhập số tiền';
                }

                if ($data['area'] === 0) {
                    $data['areaErr'] = 'Bạn chưa nhập diện tích';
                }

                if (empty($data['description'])) {
                    $data['descriptionErr'] =
                        'Bạn chưa nhập thông tin chi tiết';
                }
                if (
                    empty($data['purposeErr']) &&
                    empty($data['titleErr']) &&
                    empty($data['addressErr']) &&
                    empty($data['imageUploadErr']) &&
                    empty($data['valueErr']) &&
                    empty($data['descriptionErr']) &&
                    empty($data['areaErr']) &&
                    empty($data['typeOwnErr'])
                ) {
                    // Move file
                    foreach ($data['imageUpload']['error'] as $key => $error) {
                        if ($error == UPLOAD_ERR_OK) {
                            move_uploaded_file(
                                $data['imageUpload']['tmp_name'][$key],
                                APPROOT .
                                    '/public/imageUpload/' .
                                    $data['imageUpload']['name'][$key]
                            );
                        }
                    }
                    // Save to database RealEstale
                    $dataInput = [
                        'title' => $data['title'],
                        'address' => $data['address'],
                        'value' => $data['value'],
                        'description' => $data['description'],
                        'area' => $data['area'],
                        'idTypeOwn' => $data['typeOwn'],
                        'idPurpose' => $data['purpose'],
                        'idUser' => $_SESSION['idUser'],
                        'status' => 1
                    ];
                    $field = implode(', ', array_keys($dataInput));
                    $paramPlaceholder =
                        ':' . implode(', :', array_keys($dataInput));
                    $sql = sprintf(
                        'INSERT INTO RealEstale (%s) VALUES (%s)',
                        $field,
                        $paramPlaceholder
                    );
                    Database::modify($sql, $dataInput);

                    $rowLast = Database::get(
                        'SELECT idRealEstale FROM RealEstale ORDER BY idRealEstale DESC LIMIT 1'
                    );
                    $lastId = $rowLast[0]['idRealEstale'];
                    // Save to image

                    foreach ($data['imageUpload']['name'] as $itemImage) {
                        Database::modify(
                            "INSERT INTO Image (namePath, idRealEstale) VALUES ('$itemImage', $lastId )"
                        );
                    }
                    $this->redirect('home/index');
                } else {
                    var_dump($data);
                    $this->renderView('realestal/add', $data);
                }
            } else {
                $data = [
                    'purpose' => '',
                    'title' => '',
                    'address' => '',
                    'typeOwn' => '',
                    'imageUpload' => '',
                    'value' => '',
                    'area' => '',
                    'description' => '',

                    'purposeErr' => '',
                    'titleErr' => '',
                    'addressErr' => '',
                    'typeOwnErr' => '',
                    'imageUploadErr' => '',
                    'valueErr' => '',
                    'areaErr' => '',
                    'descriptionErr' => ''
                ];
                $this->renderView('realestal/add', $data);
            }
        } else {
            $this->redirect('user/login');
        }
    }
}
