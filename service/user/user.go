package user

import (
	"context"
	"mime/multipart"

	"github.com/dimasyudhana/alterra-group-project-2/entities"
)

type UserServiceInterface interface {
	Login(ctx context.Context, req entities.UserReqLogin) (error, int)
	Register(ctx context.Context, req entities.UserReqRegister, filehead *multipart.FileHeader) error
	GetById(ctx context.Context, id int) (*entities.User, error)
	Update(ctx context.Context, req entities.UserReqUpdate, filehead *multipart.FileHeader, id int) error
}
