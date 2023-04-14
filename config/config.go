package config

import (
	"github.com/spf13/viper"
)

type Server struct {
	Port string `mapstructure:"PORT"`
}
type DatabaseConfig struct {
	Host     string `mapstructure:"HOST"`
	Port     string `mapstructure:"PORT"`
	Username string `mapstructure:"USERNAME"`
	Password string `mapstructure:"PASSWORD"`
	Name     string `mapstructure:"NAME"`
}

type GCPConfig struct {
	Credential string `mapstructure:"CREDEN"`
	PRJID      string `mapstructure:"PROJECTID"`
	BCKNM      string `mapstructure:"BUCKETNAME"`
	Path       string `mapstructure:"PATH"`
}

type Config struct {
	Server     Server         `mapstructure:"SERVER"`
	Database   DatabaseConfig `mapstructure:"DATABASE"`
	JwtSecret  string         `mapstructure:"JWTSECRET"`
	CSRFLength int            `mapstructure:"CSRFLENGTH"`
	CSRFMode   string         `mapstructure:"CSRFMODE"`
	GCP        GCPConfig      `mapstructure:"GCP"`
}

func InitConfiguration() (*Config, error) {
	viper.SetConfigType("json")
	viper.SetConfigName("config")
	viper.AddConfigPath(".")
	if err := viper.ReadInConfig(); err != nil {
		return nil, err
	}
	viper.AutomaticEnv()
	var config Config
	if err := viper.Unmarshal(&config); err != nil {
		return nil, err
	}
	return &config, nil
}
