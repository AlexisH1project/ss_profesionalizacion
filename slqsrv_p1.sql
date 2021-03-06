USE [bd_profss]
GO
/****** Object:  Table [dbo].[ct_documentos]    Script Date: 23/09/2021 11:16:00 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ct_documentos](
	[id_doc] [int] IDENTITY(1,1) NOT NULL,
	[nombre_documento] [varchar](265) NOT NULL,
	[documentos] [varchar](6) NOT NULL,
	[prefijo] [varchar](15) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_doc] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ct_unidades]    Script Date: 23/09/2021 11:16:00 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ct_unidades](
	[id_ur] [int] IDENTITY(1,1) NOT NULL,
	[clave_ur] [varchar](4) NOT NULL,
	[descripcion] [varchar](200) NOT NULL,
	[ramo] [varchar](4) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_ur] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[registro]    Script Date: 23/09/2021 11:16:00 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[registro](
	[id_encuesta] [int] IDENTITY(1,1) NOT NULL,
	[ur] [varchar](200) NOT NULL,
	[domicilio_ur] [varchar](90) NOT NULL,
	[rfc_t] [varchar](13) NOT NULL,
	[nombre_t] [varchar](50) NOT NULL,
	[apellido1_t] [varchar](45) NOT NULL,
	[apellido2_t] [varchar](45) NOT NULL,
	[puesto_t] [varchar](80) NOT NULL,
	[domicilio_t] [varchar](90) NOT NULL,
	[correo_oft] [varchar](65) NOT NULL,
	[correo_perst] [varchar](65) NOT NULL,
	[tel_t] [int] NOT NULL,
	[ext_t] [int] NOT NULL,
	[rfc_j] [varchar](13) NOT NULL,
	[nombre_j] [varchar](50) NOT NULL,
	[apellido1_j] [varchar](45) NOT NULL,
	[apellido2_j] [varchar](45) NOT NULL,
	[puesto_j] [varchar](80) NOT NULL,
	[domicilio_j] [varchar](80) NOT NULL,
	[correo_ofj] [varchar](65) NOT NULL,
	[correo_persj] [varchar](65) NOT NULL,
	[tel_j] [int] NOT NULL,
	[ext_j] [int] NOT NULL,
	[cel_j] [int] NOT NULL,
	[rfc_e] [varchar](13) NOT NULL,
	[nombre_e] [varchar](50) NOT NULL,
	[apellido1_e] [varchar](45) NOT NULL,
	[apellido2_e] [varchar](45) NOT NULL,
	[puesto_e] [varchar](80) NOT NULL,
	[correo_ofe] [varchar](65) NOT NULL,
	[correo_perse] [varchar](65) NOT NULL,
	[tel_e] [int] NOT NULL,
	[ext_e] [int] NOT NULL,
	[cel_e] [int] NOT NULL,
	[ine] [varchar](2) NOT NULL,
	[fmp] [varchar](2) NOT NULL,
	[aur] [varchar](2) NOT NULL,
	[fechaCaptura] [varchar](10) NOT NULL,
	[id_doc] [varchar](14) NOT NULL,
	[color_estado] [varchar](15) NOT NULL,
	[usuario_asignado] [varchar](65) NOT NULL,
	[password_asignado] [varchar](40) NOT NULL,
	[fechaEnvioUsuario] [varchar](10) NOT NULL,
	[motivo_rechazo] [varchar](110) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_encuesta] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[usuarios]    Script Date: 23/09/2021 11:16:00 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[usuarios](
	[usuario] [varchar](50) NOT NULL,
	[contrasena] [varchar](50) NULL,
	[id_rol] [int] NOT NULL,
	[colorAsignado] [varchar](15) NOT NULL,
	[nombrePersonal] [varchar](60) NOT NULL,
	[unidadCorrespondiente] [varchar](4) NOT NULL,
	[id_numUser] [int] IDENTITY(1,1) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_numUser] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[usuarios] ADD  DEFAULT (NULL) FOR [contrasena]
GO
