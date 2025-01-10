<?php

namespace Drupal\user_info\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserPasswordController extends ControllerBase {

  public function changePassword($uid, Request $request) {
    try {
      // Kiểm tra quyền truy cập
      if (!$this->currentUser()->hasPermission('edit any user profile') &&
        $this->currentUser()->id() != $uid) {
        throw new HttpException(403, 'Không có quyền thay đổi mật khẩu người dùng.');
      }

      // Load user entity
      $user = $this->entityTypeManager()->getStorage('user')->load($uid);
      if (!$user) {
        throw new HttpException(404, 'Không tìm thấy người dùng.');
      }

      $content = json_decode($request->getContent(), TRUE);

      // Validate input
      if (empty($content['current_password']) || empty($content['new_password'])) {
        throw new HttpException(400, 'Vui lòng cung cấp mật khẩu hiện tại và mật khẩu mới.');
      }

      // Verify current password
      $account = \Drupal::service('user.auth')->authenticate(
        $user->getAccountName(),
        $content['current_password']
      );

      if (!$account) {
        throw new HttpException(400, 'Mật khẩu hiện tại không đúng.');
      }

      // Update password
      $user->setPassword($content['new_password']);
      $user->save();

      return new JsonResponse([
        'message' => 'Thay đổi mật khẩu thành công',
      ]);
    }
    catch (\Exception $e) {
      throw new HttpException(500, 'Có lỗi xảy ra: ' . $e->getMessage());
    }
  }
}
