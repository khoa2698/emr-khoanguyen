<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Http\Requests\emr\account\StoreAccountRequest;
use App\Http\Requests\emr\account\UpdateAccountRequest;
use Illuminate\Http\Request;
use App\Http\Services\Emr\Account\AccountService;

class AccountController extends Controller
{
    protected $accountService;
    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }
    // Màn hình danh sách account
    public function index()
    {
        return view('admin.account.list',[
            'title' => 'Danh Sách Tài Khoản',
            'accounts' => $this->accountService->getAll(),
        ]);
    }
    
    // Màn hình thêm
    public function create()
    {
        return view('admin.account.add', [
            'title' => 'Thêm tài khoản mới',
            'roles' => $this->accountService->getAllRole()
        ]);
    }

    public function store(StoreAccountRequest $accountRequest)
    {
        $this->accountService->store($accountRequest);
        return redirect()->route('account.index');
    }

    // Màn hình sửa
    public function edit($id)
    {
        return view('admin.account.edit', [
            'account' => $this->accountService->getOne($id),
            'roles' => $this->accountService->getAllRole()
        ]);
    }

    public function update(UpdateAccountRequest $accountRequest, $id)
    {
        $this->accountService->update($accountRequest, $id);
        return redirect()->route('account.index');
    }

    public function destroy(Request $request)
    {
        $result = $this->accountService->destroy($request);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa Thành Công'
            ]);
        }

        return response()->json([
            'error' => true,
        ]);
    }
}
