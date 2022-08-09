<?php
namespace Modules\Admin\Repositories\User;
use App\Models\User;
class UserRepository
{
    /**
     * @var User
     */
    protected User $user;

    /**
     * UserRepository constructor
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get all post.
     *
     * @return User $user
     */
    public function getAllUser()
    {
    return $this->user
        ->get();
    }
    /**
     * Save User
     * @param $data
     * @retrun Post
     */
    /**
     * @return User
     */
    public function save($data)
    {
        $user = new $this->user;
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->address = $data['address'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->image = $data['image'];
        $user->password = $data['password'];

        $user->save();

        return $user->fresh();
    }
}
