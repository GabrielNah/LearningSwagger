<?php


namespace App\Http\SwaggerModels;
/**
 * @OA\Schema(
 *     required={"id", "name","email"},
 *     type="object"
 * )
 */

class UserDataResponse
{
    /**
    *   @OA\Property(
    *       type="integer",
    *        property="id",
    *       example="15"
    *   )
     * */
    public $id;
    /**
     *   @OA\Property(
     *       type="string",
     *        property="email",
     *       example="exampleemail@gmail.com"
     *   )
     */
    public $name;
    /**
     *   @OA\Property(
     *       type="string",
     *        property="name",
     *       example="ExampleUserName"
     *   )
     */
    public $email;

}
