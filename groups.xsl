<?xml version='1.0'?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/root">
        <html>
            <body>
                <table border="1" align="center" width="300px">
                    <tr>
                        <th>Группа</th>
                        <th>Кол-во студентов</th>
                    </tr>
                    <xsl:for-each select="group" >
                    <tr>
                        <td><xsl:value-of select="@title" /></td>
                        <td><xsl:value-of select="count(student)" /></td>
                    </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>